<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;


use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;

use App\Entity\Createur;
use App\Repository\CreateurRepository;
use App\Form\CreateurType;

use App\Entity\CommentaireModele;
use App\Repository\CommentaireModeleRepository;

use App\Entity\Modele;
use App\Repository\ModeleRepository;
use App\Form\ModeleType;

use App\Entity\Variante;
use App\Repository\VarianteRepository;
use App\Form\VarianteType;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin')]
class AdminController extends AbstractController
{
    // utilisateur superadmin
    /*public function user_superadmin() :bool
    {
        $roles = $this->security->getUser()->getRoles()->get('ROLE_SUPERADMIN');
        return isset($roles);
    }
    // utilisateur admin
    public function user_admin() :bool
    {
        return true;
        $roles = $this->security->getUser()->getRoles()->get('ROLE_ADMIN');
        return isset($roles);
    }*/


    #[Route('/addModel', name: 'app_admin_addModel', methods: ['GET','POST'])]
    public function admin_addModel(Request $request, ModeleRepository $modeleRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $modele = new Modele();
        $formModel = $this->createForm(ModeleType::class, $modele);
        $formModel->handleRequest($request);

        if ($formModel->isSubmitted() && $formModel->isValid()) {
            $modeleRepository->save($modele, true);


            return $this->redirectToRoute('app_admin_addmodel_addVariant', ["idModel" => $modele->getId()], Response::HTTP_SEE_OTHER);
        }
        
        return $this->renderForm('admin/addModel.html.twig', [
            'modele' => $modele,
            'formModel' => $formModel,
        ]);
    }

    #[Route('/addModel/{idModel}/addVariant', name: 'app_admin_addmodel_addVariant', methods: ['GET','POST'])]
    #[Route('/editModel/{idModel}/addVariant', name: 'app_admin_editmodel_addVariant', methods: ['GET','POST'])]
    public function admin_anymodel_addVariants(Request $request, ModeleRepository $modeleRepository, VarianteRepository $varianteRepository, int $idModel): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $variante = new Variante();
        $variante->setIdModele($modeleRepository->find($idModel));

        $formVariant = $this->createForm(VarianteType::class, $variante);
        $formVariant->handleRequest($request);

        if ($formVariant->isSubmitted() && $formVariant->isValid()) {
            $varianteRepository->save($variante, true);

            if ($request->request->get("nextStep") == 'otherVariant'){
                return $this->redirectToRoute('app_admin_addmodel_addVariant', ["idModel" => $idModel], Response::HTTP_SEE_OTHER);
            } else {
                return $this->redirectToRoute('app_model_any', ["id" => $idModel], Response::HTTP_SEE_OTHER);
            }
        }
        
        return $this->render('admin/addModel.html.twig', [
            'idModel' => $idModel,
            'variante' => $variante,
            'formVariant' => $formVariant->createView(),
        ]);
    }

    #[Route('/delModel/{idModel}', name: 'app_admin_delModel', methods: ['GET','POST'])]
    public function admin_delModel(ModeleRepository $modeleRepository, VarianteRepository $varianteRepository, Request $request, int $idModel): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $model = $modeleRepository->find($idModel);

        if ($model == null){
            return $this->redirectToRoute('app_main', [], Response::HTTP_SEE_OTHER);
        }

        $variantes = $model->getVariantes();

        foreach ($variantes as $variante) {
            $varianteRepository->remove($variante, true);
        }
        
        $modeleRepository->remove($model, true);

        return $this->redirectToRoute('app_modele_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/editModel/{id}', name: 'app_admin_editModel', methods: ['GET','POST'])]
    public function admin_editModel(Request $request, ModeleRepository $modeleRepository, String $id, SluggerInterface $slugger): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $modele = $modeleRepository->find($id);

        $form = $this->createForm(ModeleType::class, $modele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             $newImage = $form->get('imageModele')->getData();
            if($newImage){
                $oldImage = pathinfo($newImage->getClientOriginalName(), PATHINFO_FILENAME);
                $safeImage = $slugger->slug($oldImage);
                $newName = $safeImage.'-'.uniqid().'.'.$newImage->guessExtension();
                    $newImage->move(
                        $this->getParameter('images'),
                        $newName
                    );

                $modele->setImageModele($newName);
                
            $modeleRepository->save($modele, true);
            }   ;

            return $this->redirectToRoute('app_model_any', ["id" => $id], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/addModel.html.twig', [
            'modele' => $modele,
            'formModel2' => $form,
        ]);
    }
    
    #[Route('/editModel/{idModel}/delVariante/{idVariante}', name: 'app_admin_editModel_delVariante', methods: ['GET','POST'])]
    public function admin_editModel_delVariante(Request $request, VarianteRepository $varianteRepository, String $idModel, String $idVariante): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $variante = $varianteRepository->find($idVariante);
        $varianteRepository->remove($variante, true);

        return $this->redirectToRoute('app_model_any', ["id" => $idModel], Response::HTTP_SEE_OTHER);
    }

    // Différentes fonctions et potentiellement pages selon ce qu'on y met

    // Promouvoir un utilisateur
    #[Route('/utilisateur/{user}/up', name:'app_up')]
    public function admin_sa_promU(UtilisateurRepository $userRepository, Utilisateur $user) {
            
            $u = $userRepository->find($user);
            $roles = $u->getRoles();
         
                if(in_array("ROLE_ADMIN", $roles)){
                    array_push($roles, "ROLE_SUPERADMIN");
                    $u->setRoles($roles);
                }
                if(in_array("ROLE_USER", $roles)){
                    array_push($roles, "ROLE_ADMIN");
                    $u->setRoles($roles);
                }
            $userRepository->save($user, true);
            return $this->redirectToRoute('app_utilisateur_index');
    }
    #[Route('/utilisateur/{user}/down', name:'app_down')]
    public function admin_sa_demoteU(UtilisateurRepository $userRepository, Utilisateur $user) {
            
            $u = $userRepository->find($user);
            $roles = $u->getRoles();
         
                if(in_array("ROLE_SUPERADMIN", $roles)){
                    $u->setRoles(["ROLE_USER","ROLE_ADMIN"]);
                }
                else if(in_array("ROLE_ADMIN", $roles)){
                    $u->setRoles(["ROLE_USER"]);
                }
            $userRepository->save($user, true);
            return $this->redirectToRoute('app_utilisateur_index');
    }

    // Bannir un utilisateur
    #[Route('/utilisateur/{user}/ban', name:'app_ban')]
    public function admin_a_banU(UtilisateurRepository $userRepository, Utilisateur $user) {
            $u = $userRepository->find($user);
            $u->setBanUser(1);
            $userRepository->save($user, true);
        return $this->redirectToRoute('app_utilisateur_index');
    }

    // Débannir un utilisateur
    #[Route('/utilisateur/{user}/deban', name:'app_unban')]
    public function admin_a_unbanU(UtilisateurRepository $userRepository, Utilisateur $user) {
        $u = $userRepository->find($user);
            $u->setBanUser(0);
            $userRepository->save($user, true);
        return $this->redirectToRoute('app_utilisateur_index');
    }

    
   
}

 ?>