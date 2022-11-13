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
        return $this->render('main/main.html.twig', [
            'modeles' => $modeleRepository->findAll(),
            'searched' => '',
        ]);
    }

    #[Route('/search', name: 'app_search_page', methods: ['GET'])]
    public function search_page(ModeleRepository $modeleRepository, Request $request): Response
    {
        if($request->query->get('r') != null){





            $searched = $request->query->get('r');

            if($request->query->get('t') != null){



            $type = $request->query->get('t');

            return $this->render('main/search.html.twig', [
            'modeles' => $modeleRepository->findByLike(
                ['nomModele' => $searched],
                 ['descriptionModele' => $type],
            ),
            'searched' => $searched,
            'type'=>$type,
        ]);
        }
                 else{
                     return $this->render('main/search.html.twig', [
            'modeles' => $modeleRepository->findByLike(
                ['nomModele' => $searched],
            ),
            'searched' => $searched,
            'type' => '',
        ]);}

            }
            else {
                $type = $request->query->get('t');
                return $this->render('main/search.html.twig', [
            'modeles' => $modeleRepository->findByLike(
                ['descriptionModele' => $type],
            ),
            'type' => $type,
            'searched' => '',
 ]);

        }
        return $this->render('main/search.html.twig', [
            'modeles' => $modeleRepository->findAll(),

            'searched' => '',
        ]);
    }

        
}

 ?>