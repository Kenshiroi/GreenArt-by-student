<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

use App\Entity\Modele;
use App\Form\ModeleType;
use App\Repository\ModeleRepository;



#[Route('/panier')]
class ModelPanierController extends AbstractController
{
    #[Route('/add', name: 'app_model_panier_add', methods: ['GET'])]
    public function model_panier_add(ModeleRepository $modeles, Request $request): Response
    {
        //unset($_COOKIE['panier']);

        $id = $request->query->get("id"); //récupérer l'id du model
        $model = $modeles->find($id); //récupérer le model de la page
        $nombres = $request->query->all("nombres"); //récupérer la mémoire des +- (afin de l'upload dans les cookies)

        for ($i=0; $i<count($nombres); $i++)
        {
            if ($nombres[$i][1] == 0) 
            {
                $newNombres = [];
                for ($iS=0; $iS< $i; $iS++)
                {
                    $newNombres = [...$newNombres, $nombres[$iS]];
                }
                for ($iS=$i+1; $iS< count($nombres); $iS++)
                {
                    $newNombres = [...$newNombres, $nombres[$iS]];
                }
                $nombres = $newNombres;
                $i--;
            }
        }

        if (isset($_COOKIE['panier'])) 
        {
            $panier = json_decode($_COOKIE['panier'], true);
            $memoire = [$id, ...$nombres];
            $panier = [...$panier, $memoire];
            setcookie('panier', json_encode($panier));
        }
        else 
        {
            $memoire = [$id, ...$nombres];
            $panier = [$memoire];
            setcookie('panier', json_encode($panier));
        }
        
        return $this->render('model/model_panier.html.twig', [
            'panier' => json_decode($_COOKIE['panier'], true),
            'modeles' => $modeles->findAll(),
            'reload' => 1,
        ]);
    }

    #[Route('/', name: 'app_model_panier', methods: ['GET'])]
    public function model_panier(ModeleRepository $modeles): Response
    {
        /*
        $id = 1;
        $nombres = [[1,2],[3,4]];
        $memoire = [$id, ...$nombres];
        $panier = [$memoire];
        setcookie('panier', json_encode($panier));
        */


        //unset($_COOKIE['panier']);
        return $this->render('model/model_panier.html.twig', [
            'panier' => json_decode($_COOKIE['panier'], true),
            'modeles' => $modeles->findAll(),
            'reload' => 0,
        ]);


    }
}











   
 ?>