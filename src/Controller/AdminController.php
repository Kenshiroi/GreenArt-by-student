<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('', name: 'app_admin_main', methods: ['GET'])]
    public function admin_main(UtilisateurRepository $userRepository): Response
    {
        return $this->render('admin/admin.html.twig', [
            'user' => '',
        ]);
    }

    // Différentes fonctions et potentiellement pages selon ce qu'on y met

}

 ?>