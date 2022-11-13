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

        return $this->redirectToRoute('app_main', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/editModel/{id}', name: 'app_admin_editModel', methods: ['GET','POST'])]
    public function admin_editModel(Request $request, ModeleRepository $modeleRepository, String $id): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $modele = $modeleRepository->find($id);

        $form = $this->createForm(ModeleType::class, $modele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $modeleRepository->save($modele, true);

            return $this->redirectToRoute('app_model_any', ["id" => $idModel], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/addModel.html.twig', [
            'modele' => $modele,
            'formModel' => $form,
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
    public function admin_sa_promU(UtilisateurRepository $userRepository, Utilisateur $user, int $newRights) {
        if(user_superadmin()) {
            $user->setRightUser($newRights);
            $userRepository->save($user, true);
        }
    }

    // Bannir un utilisateur
    public function admin_a_banU(UtilisateurRepository $userRepository, Utilisateur $user) {
        if(user_admin()) {
            $user->setBanUser(1);
            $userRepository->save($user, true);
        }
    }

    // Débannir un utilisateur
    public function admin_a_unbanU(UtilisateurRepository $userRepository, Utilisateur $user) {
        if(user_admin()) {
            $user->setBanUser(0);
            $userRepository->save($user, true);
        }
    }

    // Supprimer un commentaire
    public function admin_a_delC(CommentaireModeleRepository $commentaireModeleRepository, CommentaireModele $commment) {
        if(user_admin()) {
            $commentaireModeleRepository->remove($commment, true);
        }
    }
   
}

 ?>