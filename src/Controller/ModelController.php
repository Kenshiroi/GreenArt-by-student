<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Modele;
use App\Form\ModeleType;
use App\Repository\ModeleRepository;

#[Route('/model')]
class ModelController extends AbstractController
{
    #[Route('/{id}', name: 'app_model_any', methods: ['GET'])]
    public function model_any(ModeleRepository $modelRepository, String $id): Response
    {
        return $this->render('model/model.html.twig', [
            'model' => $id,
            'variantes' => 'Ensemble des variantes du modèle',
        ]);
    }

    #[Route('/{id}/{idVariante}', name: 'app_model_anyvariante', methods: ['GET'])]
    public function model_anyvariante(ModeleRepository $modelRepository, String $id, String $idVariante): Response
    {
        return $this->render('model/model.html.twig', [
            'model' => $id,
            'variante' => $idVariante,
            'variantes' => 'Ensemble des variantes du modèle',
        ]);
    }
}

 ?>