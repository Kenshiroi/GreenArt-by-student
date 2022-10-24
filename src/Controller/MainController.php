<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Modele;
use App\Form\ModeleType;
use App\Repository\ModeleRepository;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main', methods: ['GET'])]
    public function main(ModeleRepository $modeleRepository): Response
    {
        return $this->render('main&search/main.html.twig');
    }

    #[Route('/search', name: 'app_search_page', methods: ['GET'])]
    public function search_page(ModeleRepository $modeleRepository): Response
    {
        return $this->render('main&search/search.html.twig', [
            'modeles' => $modeleRepository->findAll(),
            'searched' => '',
        ]);
    }

    #[Route('/search/{searched}', name: 'app_search_anything', methods: ['GET'])]
    public function search_anything(ModeleRepository $modeleRepository, String $searched): Response
    {
        return $this->render('main&search/search.html.twig', [
            'modeles' => $modeleRepository->findByLike(
                ['nomModele' => $searched],
            ),
            'searched' => $searched,
        ]);
    }
}

 ?>