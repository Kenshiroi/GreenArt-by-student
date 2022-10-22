<?php

namespace App\Controller;

use App\Entity\CreePar;
use App\Form\CreeParType;
use App\Repository\CreeParRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cree/par')]
class CreeParController extends AbstractController
{
    #[Route('/', name: 'app_cree_par_index', methods: ['GET'])]
    public function index(CreeParRepository $creeParRepository): Response
    {
        return $this->render('cree_par/index.html.twig', [
            'cree_pars' => $creeParRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_cree_par_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CreeParRepository $creeParRepository): Response
    {
        $creePar = new CreePar();
        $form = $this->createForm(CreeParType::class, $creePar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $creeParRepository->save($creePar, true);

            return $this->redirectToRoute('app_cree_par_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cree_par/new.html.twig', [
            'cree_par' => $creePar,
            'form' => $form,
        ]);
    }

    #[Route('/{idModele}', name: 'app_cree_par_show', methods: ['GET'])]
    public function show(CreePar $creePar): Response
    {
        return $this->render('cree_par/show.html.twig', [
            'cree_par' => $creePar,
        ]);
    }

    #[Route('/{idModele}/edit', name: 'app_cree_par_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CreePar $creePar, CreeParRepository $creeParRepository): Response
    {
        $form = $this->createForm(CreeParType::class, $creePar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $creeParRepository->save($creePar, true);

            return $this->redirectToRoute('app_cree_par_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cree_par/edit.html.twig', [
            'cree_par' => $creePar,
            'form' => $form,
        ]);
    }

    #[Route('/{idModele}', name: 'app_cree_par_delete', methods: ['POST'])]
    public function delete(Request $request, CreePar $creePar, CreeParRepository $creeParRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$creePar->getIdModele(), $request->request->get('_token'))) {
            $creeParRepository->remove($creePar, true);
        }

        return $this->redirectToRoute('app_cree_par_index', [], Response::HTTP_SEE_OTHER);
    }
}
