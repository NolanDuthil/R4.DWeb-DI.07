<?php


/* indique où "vit" ce fichier */

namespace App\Controller;


/* indique l'utilisation du bon bundle pour gérer nos routes */

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use stdClass;
use App\Entity\Lego;


/* le nom de la classe doit être cohérent avec le nom du fichier */

class LegoController extends AbstractController
{
    // L’attribute #[Route] indique ici que l'on associe la route
    // "/" à la méthode home pour que Symfony l'exécute chaque fois
    // que l'on accède à la racine de notre site.
    
    private $legos;
    public function __construct()
    {
        $this->legos = file_get_contents("../src/data.json");
        $this->legos = json_decode($this->legos);
        var_dump($this->legos);
        
    }


    #[Route('/',)]
    public function home(): Response
    {
        foreach ($this->legos as $lego => $value ) {
            new Lego($lego["id"], $lego["name"], $lego["collection"]);
        }
        return $value;
        die();
    }

    #[Route('/me',)]
    public function me()
    {
        die("Nolan");
    }
}
