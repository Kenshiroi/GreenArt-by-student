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

//setcookie("TestCookie", "test1555");
//'testcookie' => $_COOKIE["TestCookie"],


#[Route('/model')]
class ModelController extends AbstractController
{
    #[Route('/{id}', name: 'app_model_any', methods: ['GET'])]
    public function model_any(ModeleRepository $modeles, String $id) : Response
    {
        $model = $modeles->find($id); //obtenir le model de la page
        if ($model == null){
            $model = $modeles->find(1);
        }

        //créer un array de 0 pour chaque variante du model (nombre voulu du client)
        $nombres = [];
        for ($i=0; $i<$model->getVariantes()->count(); $i++){
            $inter = [$model->getVariantes()[$i]->getId(), 0];
            $nombres = [...$nombres, $inter];
        }
        // 

        //lancement de la page 
        return $this->render('model/model.html.twig', [
            'model' => $model,
            'variantes' => $model->getVariantes(),
            'nombres' => $nombres,
        ]);
        //
    }

    #[Route('/{id}/+', name: 'app_model_+', methods: ['GET'])]
    public function model_plus(ModeleRepository $modeles, String $id, Request $request): Response
    {
        $model = $modeles->find($id); //obtenir le model de la page

        $nombres = $request->query->all("nombres"); //récupérer la mémoire des +- 
        $idNombre = $request->query->get("idNombre"); //récupérer la ou est fait la modif

        $nombres[$idNombre-1][1] = $nombres[$idNombre-1][1] +1; //faire la modif

        //lancement de la page
        return $this->render('model/model.html.twig', [
            'model' => $model,
            'variantes' => $model->getVariantes(),
            'nombres' => $nombres,
        ]);
        //
    }

    #[Route('/{id}/-', name: 'app_model_-', methods: ['GET'])]
    public function model_moins(ModeleRepository $modeles, String $id, Request $request): Response
    {
        $model = $modeles->find($id); //récupérer le model de la page
        $nombres = $request->query->all("nombres"); //récupérer la mémoire des +- 
        $idNombre = $request->query->get("idNombre"); //récupérer la ou est fait la modif

        if ($nombres[$idNombre-1][1] > 0){
            $nombres[$idNombre-1][1] = $nombres[$idNombre-1][1] -1; //faire la modif
        }

        //lancement de la page
        return $this->render('model/model.html.twig', [
            'model' => $model,
            'variantes' => $model->getVariantes(),
            'nombres' => $nombres,
        ]);
        //
    }
}

#[Route('/panier')]
class PanierController extends AbstractController
{
    #[Route('/add', name: 'app_model_panier_add', methods: ['GET'])]
    public function model_panier_add(ModeleRepository $modeles, Request $request): Response
    {
        /*
        $id = $request->query->all("id"); //récupérer l'id du model
        $model = $modeles->find($id); //récupérer le model de la page
        $nombres = $request->query->all("nombres"); //récupérer la mémoire des +- (afin de l'upload dans les cookies)

        if (isset($_COOKIE['panier'])) 
        {
            $panier = $_COOKIE["panier"];
            $memoire = [$id, ...$nombres];
            $panier = [...$panier, $memoire];
            setcookie('panier', $panier);
        }
        else 
        {
            $memoire = [$id, ...$nombres];
            $panier = [$memoire];
            setcookie('panier', $panier);
        }
        */
        return $this->render('model/model_panier.html.twig', [
            //'panier' => $_COOKIE["panier"],
            //'modeles' => $modes->findAll(),
        ]);
    }
}





   
 ?>