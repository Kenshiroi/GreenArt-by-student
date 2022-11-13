<?php

namespace App\Controller;

use App\Entity\Modele;
use App\Form\ModeleType;
use App\Repository\ModeleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class ModeleController extends AbstractController
{
    #[Route('/admin/modele', name: 'app_modele_index', methods: ['GET'])]
    public function index(ModeleRepository $modeleRepository): Response
    {
        return $this->render('modele/index.html.twig', [
            'modeles' => $modeleRepository->findAll(),
        ]);
    }

    #[Route('/modele/new', name: 'app_modele_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ModeleRepository $modeleRepository): Response
    {
        $modele = new Modele();
        $form = $this->createForm(ModeleType::class, $modele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $modeleRepository->save($modele, true);

            return $this->redirectToRoute('app_modele_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('modele/new.html.twig', [
            'modele' => $modele,
            'form' => $form,
        ]);
    }

    #[Route('/modele/{id}', name: 'app_modele_show', methods: ['GET'])]
    public function show(Modele $modele): Response
    {
        return $this->render('modele/show.html.twig', [
            'modele' => $modele,
        ]);
    }

    #[Route('/modele/{id}/edit', name: 'app_modele_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Modele $modele, ModeleRepository $modeleRepository, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ModeleType::class, $modele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $modeleRepository->save($modele, true);
            if ($form->isSubmitted() && $form->isValid()) {
            $newImage = $form->get('image')->getData();
            if($newImage){
                $oldImage = pathinfo($newImage->getClientOriginalName(), PATHINFO_FILENAME);
                $safeImage = $slugger->slug($oldImage);
                $newName = $safeImage.'-'.uniqid().'.'.$newImage->guessExtension();
                    $newImage->move(
                        $this->getParameter('images'),
                        $newName
                    );

                $modele->setImageModele($newName);
            }   
            $modeleRepository->save($modele, true);

            return $this->redirectToRoute('app_main', [], Response::HTTP_SEE_OTHER);
        }

            return $this->redirectToRoute('app_modele_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('modele/edit.html.twig', [
            'modele' => $modele,
            'form' => $form,
        ]);
    }

    #[Route('/modele/{id}', name: 'app_modele_delete', methods: ['POST'])]
    public function delete(Request $request, Modele $modele, ModeleRepository $modeleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$modele->getId(), $request->request->get('_token'))) {
            $modeleRepository->remove($modele, true);
        }

        return $this->redirectToRoute('app_modele_index', [], Response::HTTP_SEE_OTHER);
    }
}
