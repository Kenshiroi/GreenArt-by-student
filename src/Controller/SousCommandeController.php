<?php

namespace App\Controller;

use App\Entity\SousCommande;
use App\Form\SousCommandeType;
use App\Repository\SousCommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/sous/commande')]
class SousCommandeController extends AbstractController
{
    #[Route('/', name: 'app_sous_commande_index', methods: ['GET'])]
    public function index(SousCommandeRepository $sousCommandeRepository): Response
    {
        return $this->render('sous_commande/index.html.twig', [
            'sous_commandes' => $sousCommandeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sous_commande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SousCommandeRepository $sousCommandeRepository): Response
    {
        $sousCommande = new SousCommande();
        $form = $this->createForm(SousCommandeType::class, $sousCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sousCommandeRepository->save($sousCommande, true);

            return $this->redirectToRoute('app_sous_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sous_commande/new.html.twig', [
            'sous_commande' => $sousCommande,
            'form' => $form,
        ]);
    }

    #[Route('/{idVariante}', name: 'app_sous_commande_show', methods: ['GET'])]
    public function show(SousCommande $sousCommande): Response
    {
        return $this->render('sous_commande/show.html.twig', [
            'sous_commande' => $sousCommande,
        ]);
    }

    #[Route('/{idVariante}/edit', name: 'app_sous_commande_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SousCommande $sousCommande, SousCommandeRepository $sousCommandeRepository): Response
    {
        $form = $this->createForm(SousCommandeType::class, $sousCommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sousCommandeRepository->save($sousCommande, true);

            return $this->redirectToRoute('app_sous_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sous_commande/edit.html.twig', [
            'sous_commande' => $sousCommande,
            'form' => $form,
        ]);
    }

    #[Route('/{idVariante}', name: 'app_sous_commande_delete', methods: ['POST'])]
    public function delete(Request $request, SousCommande $sousCommande, SousCommandeRepository $sousCommandeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sousCommande->getIdVariante(), $request->request->get('_token'))) {
            $sousCommandeRepository->remove($sousCommande, true);
        }

        return $this->redirectToRoute('app_sous_commande_index', [], Response::HTTP_SEE_OTHER);
    }
}
