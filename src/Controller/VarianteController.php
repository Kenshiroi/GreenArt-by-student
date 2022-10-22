<?php

namespace App\Controller;

use App\Entity\Variante;
use App\Form\VarianteType;
use App\Repository\VarianteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/variante')]
class VarianteController extends AbstractController
{
    #[Route('/', name: 'app_variante_index', methods: ['GET'])]
    public function index(VarianteRepository $varianteRepository): Response
    {
        return $this->render('variante/index.html.twig', [
            'variantes' => $varianteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_variante_new', methods: ['GET', 'POST'])]
    public function new(Request $request, VarianteRepository $varianteRepository): Response
    {
        $variante = new Variante();
        $form = $this->createForm(VarianteType::class, $variante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $varianteRepository->save($variante, true);

            return $this->redirectToRoute('app_variante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('variante/new.html.twig', [
            'variante' => $variante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_variante_show', methods: ['GET'])]
    public function show(Variante $variante): Response
    {
        return $this->render('variante/show.html.twig', [
            'variante' => $variante,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_variante_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Variante $variante, VarianteRepository $varianteRepository): Response
    {
        $form = $this->createForm(VarianteType::class, $variante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $varianteRepository->save($variante, true);

            return $this->redirectToRoute('app_variante_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('variante/edit.html.twig', [
            'variante' => $variante,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_variante_delete', methods: ['POST'])]
    public function delete(Request $request, Variante $variante, VarianteRepository $varianteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$variante->getId(), $request->request->get('_token'))) {
            $varianteRepository->remove($variante, true);
        }

        return $this->redirectToRoute('app_variante_index', [], Response::HTTP_SEE_OTHER);
    }
}
