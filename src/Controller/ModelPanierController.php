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
            //
            return $this->render('model/model_panier.html.twig', [
            'panier' => json_decode($_COOKIE['panier'], true),
            'modeles' => $modeles->findAll(),
            'reload' => 1,
            ]);
        }
        else 
        {
            $memoire = [$id, ...$nombres];
            $panier = [$memoire];
            setcookie('panier', json_encode($panier));
            return $this->render('model/model_panier.html.twig', [
            'panier' => [],
            'modeles' => $modeles->findAll(),
            'reload' => 1,
            ]);
        }
    }
    #[Route('/deleteAll', name: 'app_model_panier_deleteAll', methods: ['GET'])]
    public function model_panier_deleteAll(ModeleRepository $modeles): Response
    {
        setcookie('panier', null);
        if (isset($_COOKIE['panier'])) 
        {
            return $this->render('model/model_panier.html.twig', [
                'panier' => json_decode($_COOKIE['panier'], true),
                'modeles' => $modeles->findAll(),
                'reload' => 1,
            ]);
        }
        else 
        {
            return $this->render('model/model_panier.html.twig', [
                'panier' => [],
                'modeles' => $modeles->findAll(),
                'reload' => 1,
            ]);
        }
    }
    #[Route('/delete', name: 'app_model_panier_delete', methods: ['GET'])]
    public function model_panier_delete(ModeleRepository $modeles, Request $request): Response
    {
        $article = $request->query->all("article"); 
        $idModel = $article[0];
        $idVariante = $request->query->get("idVariante");
        $nombre = $request->query->get("nombre");
        $model = $modeles->find($idModel);

        $panier = json_decode($_COOKIE['panier'], true);
        $newPanier = [];

        for ($i=0; $i<count($panier); $i++)
        {
            if ($panier[$i][0] == $idModel){
                $nb = count($panier[$i]);
                for ($j=1; $j<$nb; $j++)
                {
                    if ($panier[$i][$j][0] == $idVariante && $panier[$i][$j][1] == $nombre)
                    {
                        //
                        if (count($panier[$i]) <= 2)
                        {
                            for ($newI=0; $newI<count($panier); $newI++)
                            {
                                if ($newI != $i)
                                {
                                    $newPanier = [...$newPanier, $panier[$newI]];
                                }
                            }
                        }
                        else 
                        {
                            for ($newI=0; $newI<count($panier); $newI++)
                            {
                                if ($newI == $i)
                                {
                                    $article = [$idModel];
                                    for ($newJ=1; $newJ<count($panier[$i]); $newJ++)
                                    {
                                        if ($newJ != $j)
                                        {
                                            $article = [...$article, $panier[$i][$newJ]];
                                        }
                                    }
                                    $newPanier = [...$newPanier, $article];
                                }
                                else
                                {
                                    $newPanier = [...$newPanier, $panier[$newI]];
                                }
                            }
                        }
                        $j = count($panier[$i]);
                        $i = count($panier);
                        //
                    }
                }
            }
        }
        setcookie('panier', json_encode($newPanier));
        return $this->render('model/model_panier.html.twig', [
                'panier' => json_decode($_COOKIE['panier'], true),
                'modeles' => $modeles->findAll(),
                'reload' => 1,
        ]);
    }
    #[Route('/', name: 'app_model_panier', methods: ['GET'])]
    public function model_panier(ModeleRepository $modeles): Response
    {
        //setcookie('panier', null);
        if (isset($_COOKIE['panier'])) 
        {
            return $this->render('model/model_panier.html.twig', [
                'panier' => json_decode($_COOKIE['panier'], true),
                'modeles' => $modeles->findAll(),
                'reload' => 0,
            ]);
        }
        else 
        {
            return $this->render('model/model_panier.html.twig', [
                'panier' => [],
                'modeles' => $modeles->findAll(),
                'reload' => 0,
            ]);
        }
    }
} 
 ?>