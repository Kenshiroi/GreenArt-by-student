<?php

namespace App\Controller;

use App\Entity\CommentaireModele;
use App\Form\CommentaireModeleType;
use App\Repository\CommentaireModeleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commentaire/modele')]
class CommentaireModeleController extends AbstractController
{
    #[Route('/', name: 'app_commentaire_modele_index', methods: ['GET'])]
    public function index(CommentaireModeleRepository $commentaireModeleRepository): Response
    {
        return $this->render('commentaire_modele/index.html.twig', [
            'commentaire_modeles' => $commentaireModeleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_commentaire_modele_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CommentaireModeleRepository $commentaireModeleRepository): Response
    {
        $commentaireModele = new CommentaireModele();
        $form = $this->createForm(CommentaireModeleType::class, $commentaireModele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaireModeleRepository->save($commentaireModele, true);

            return $this->redirectToRoute('app_commentaire_modele_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commentaire_modele/new.html.twig', [
            'commentaire_modele' => $commentaireModele,
            'form' => $form,
        ]);
    }

    #[Route('/{idModele}', name: 'app_commentaire_modele_show', methods: ['GET'])]
    public function show(CommentaireModele $commentaireModele): Response
    {
        return $this->render('commentaire_modele/show.html.twig', [
            'commentaire_modele' => $commentaireModele,
        ]);
    }

    #[Route('/{idModele}/edit', name: 'app_commentaire_modele_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CommentaireModele $commentaireModele, CommentaireModeleRepository $commentaireModeleRepository): Response
    {
        $form = $this->createForm(CommentaireModeleType::class, $commentaireModele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaireModeleRepository->save($commentaireModele, true);

            return $this->redirectToRoute('app_commentaire_modele_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commentaire_modele/edit.html.twig', [
            'commentaire_modele' => $commentaireModele,
            'form' => $form,
        ]);
    }

    #[Route('/{idModele}', name: 'app_commentaire_modele_delete', methods: ['POST'])]
    public function delete(Request $request, CommentaireModele $commentaireModele, CommentaireModeleRepository $commentaireModeleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentaireModele->getIdModele(), $request->request->get('_token'))) {
            $commentaireModeleRepository->remove($commentaireModele, true);
        }

        return $this->redirectToRoute('app_commentaire_modele_index', [], Response::HTTP_SEE_OTHER);
    }
}
