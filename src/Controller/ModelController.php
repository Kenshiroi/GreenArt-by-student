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
    public function model_any(Modele $model, String $id): Response
    {
        return $this->render('model/model.html.twig', [
            'model' => $model,
            'variantes' => $model->getVariantes(),
        ]);
    }

    #[Route('/{id}/{idVariante}', name: 'app_model_pay', methods: ['GET'])]
    public function model_anyvariante(String $id, String $idVariante): Response
    {
        return $this->render('model/model_pay.html.twig', [
            'model' => $id,
            'variante' => $idVariante,
            'variantes' => 'Ensemble des variantes du modèle',
        ]);
    }
}

 ?>