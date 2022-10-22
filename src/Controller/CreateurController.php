<?php

namespace App\Controller;

use App\Entity\Createur;
use App\Form\CreateurType;
use App\Repository\CreateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/createur')]
class CreateurController extends AbstractController
{
    #[Route('/', name: 'app_createur_index', methods: ['GET'])]
    public function index(CreateurRepository $createurRepository): Response
    {
        return $this->render('createur/index.html.twig', [
            'createurs' => $createurRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_createur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CreateurRepository $createurRepository): Response
    {
        $createur = new Createur();
        $form = $this->createForm(CreateurType::class, $createur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $createurRepository->save($createur, true);

            return $this->redirectToRoute('app_createur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('createur/new.html.twig', [
            'createur' => $createur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_createur_show', methods: ['GET'])]
    public function show(Createur $createur): Response
    {
        return $this->render('createur/show.html.twig', [
            'createur' => $createur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_createur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Createur $createur, CreateurRepository $createurRepository): Response
    {
        $form = $this->createForm(CreateurType::class, $createur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $createurRepository->save($createur, true);

            return $this->redirectToRoute('app_createur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('createur/edit.html.twig', [
            'createur' => $createur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_createur_delete', methods: ['POST'])]
    public function delete(Request $request, Createur $createur, CreateurRepository $createurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$createur->getId(), $request->request->get('_token'))) {
            $createurRepository->remove($createur, true);
        }

        return $this->redirectToRoute('app_createur_index', [], Response::HTTP_SEE_OTHER);
    }
}
