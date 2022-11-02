<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;

use App\Entity\CommentaireModele;
use App\Repository\CommentaireModeleRepository;

use App\Entity\Modele;
use App\Repository\ModeleRepository;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/addModel/{id}', name: 'app_admin_main', methods: ['GET'])]
    public function admin_main(UtilisateurRepository $userRepository, String $id): Response
    {
        return $this->render('admin/addModel.html.twig', [
            'user' => '',
        ]);
    }

    // Différentes fonctions et potentiellement pages selon ce qu'on y met

    // Promouvoir un utilisateur
    public function admin_4_promU(UtilisateurRepository $userRepository, Utilisateur $user, int $newRights) {
        if(4 == 4 /*en attendant de voir comment fonctionnent les sessions*/) {
            $user->setRightUser($newRights);
            $userRepository->save($user, true);
        }
    }

    // Bannir un utilisateur
    public function admin_2_banU(UtilisateurRepository $userRepository, Utilisateur $user) {
        if(2 == 2 /*en attendant de voir comment fonctionnent les sessions*/) {
            $user->setBanUser(true);
            $userRepository->save($user, true);
        }
    }

    // Débannir un utilisateur
    public function admin_2_unbanU(UtilisateurRepository $userRepository, Utilisateur $user) {
        if(2 == 2 /*en attendant de voir comment fonctionnent les sessions*/) {
            $user->setBanUser(false);
            $userRepository->save($user, true);
        }
    }

    // Supprimer un commentaire
    public function admin_2_delC(CommentaireModeleRepository $commentaireModeleRepository, CommentaireModele $commment) {
        if(2 == 2 /*en attendant de voir comment fonctionnent les sessions*/) {
            $commentaireModeleRepository->remove($commment, true);
        }
    }

    // Ajouter modèle
    public function admin_3_addM(ModeleRepository $modeleRepository, Modele $model) {
        if(3 == 3 /*en attendant de voir comment fonctionnent les sessions*/) {
            $modeleRepository->save($model, true);
        }
    }

    // Supprimer modèle
    public function admin_3_delM(ModeleRepository $modeleRepository, Modele $model) {
        if(3 == 3 /*en attendant de voir comment fonctionnent les sessions*/) {
            $modeleRepository->remove($model, true);
        }
    }

    // Modifier modèle
    public function admin_3_editM(ModeleRepository $modeleRepository, Modele $model) {
        if(3 == 3 /*en attendant de voir comment fonctionnent les sessions*/) {
            $modeleRepository->save($model, true);
        }
    }
}

 ?>