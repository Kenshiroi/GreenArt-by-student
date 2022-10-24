<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/me', name: 'app_user_me', methods: ['GET'])]
    public function user_me(UtilisateurRepository $userRepository): Response
    {
        $me = ['pseudoUser' => 'Me'];
        return $this->render('user/user.html.twig', [
            'user' => $me,
        ]);
    }

    #[Route('/login', name: 'app_user_login', methods: ['GET'])]
    public function user_login(UtilisateurRepository $userRepository): Response
    {
        return $this->render('user/login.html.twig', [
            'user' => '',
        ]);
    }
    #[Route('/signin', name: 'app_user_signin', methods: ['GET'])]
    public function user_signin(UtilisateurRepository $userRepository): Response
    {
        return $this->render('user/signin.html.twig', [
            'user' => '',
        ]);
    }

    #[Route('/{id}', name: 'app_user_anyone', methods: ['GET'])]
    public function user_anyone(UtilisateurRepository $userRepository, String $id): Response
    {
        return $this->render('user/user.html.twig', [
            'user' => $userRepository->findBy(
                ['id' => $id],
            ),
        ]);
    }
}

 ?>