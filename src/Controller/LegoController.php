<?php



/* indique où "vit" ce fichier */

namespace App\Controller;


/* indique l'utilisation du bon bundle pour gérer nos routes */

use stdClass;
use App\Entity\Lego as Lego;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Loader\Configurator\CollectionConfigurator;

/* le nom de la classe doit être cohérent avec le nom du fichier */

class LegoController extends AbstractController
{
    private $legos = [];


    function __construct()
    {
        $file = file_get_contents('/var/www/html/src/data.json');
        $file = json_decode($file);
        foreach ($file as $lego) {
            $leg = new Lego($lego->id, $lego->name, $lego->collection);
            $leg->setDescription($lego->description);
            $leg->setPrice($lego->price);
            $leg->setPieces($lego->pieces);
            $leg->setBoxImage($lego->images->box);
            $leg->setLegoImage($lego->images->bg);
            array_push($this->legos, $leg);
        }
    }



    #[Route('/',)]
    public function homeAll(): Response
    {
        return $this->render("lego.html.twig", [
            'legos' => $this->legos,
        ]);
    }

    /*#[Route('/creator', )]
     public function homeCreator(): Response
     {

        $this->legos = array_filter($this->legos, function ($var) {
             return $var->collection == "Creator";
         });

         return $this->render("lego.html.twig", [
            'legos' => $this->legos,
        ]);
     }

    // #[Route('/star_wars', )]
    // public function homeStarWars(): Response
    // {

    //     $this->legos = array_filter($this->legos, function ($var) {
    //         return $var->collection == "Star Wars";
    //     });

    //     return $this->render("lego.html.twig", [
    //         'legos' => $this->legos,
    //     ]);
    // }

    // #[Route('/creator_expert', )]
    // public function homeCreatorExpert(): Response
    // {

    //     $this->legos = array_filter($this->legos, function ($var) {
    //         return $var->collection == "Creator Expert";
    //     });

    //     return $this->render("lego.html.twig", [
    //         'legos' => $this->legos,
    //     ]);
    // }*/


    #[Route('/{collection}', 'filter_by_collection', requirements: ['collection' => 'creator|star_wars|creator_expert'])]
    public function filter($collection): Response
    {

        $newlegos = [];
        foreach($this->legos as $lego){
            if(strtolower($lego->collection) == str_replace("_"," ",$collection)){
                array_push($newlegos, $lego);
            };

        }

        return $this->render("lego.html.twig", [
            'legos' => $newlegos,
        ]);
    }
}
