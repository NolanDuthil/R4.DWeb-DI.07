<?php



/* indique où "vit" ce fichier */

namespace App\Controller;


/* indique l'utilisation du bon bundle pour gérer nos routes */

use stdClass;
use App\Entity\Lego as Lego;
use App\Service\CreditsGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\LegoRepository;
use App\Repository\LegoCollectionRepository;

/* le nom de la classe doit être cohérent avec le nom du fichier */

class LegoController extends AbstractController
{
    public function __construct() {}

    #[Route('/', )]
    public function homeAll(LegoRepository $legoRepository, LegoCollectionRepository $legoCollectionRepository): Response
    {  

        // $this->coll = $lego->getAllCollection();
        // dump($this->coll);
        // dd($this->legoRepository->findAll());
        return $this->render("lego.html.twig", [
            'legos' => $legoRepository->findAll(),
            'collection' =>$legoCollectionRepository->findAll(),
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


    #[Route('/{collection}', 'filter_by_collection', requirements: ['collection' => 'Creator|Star Wars|Creator Expert|Harry Potter'])]
    public function filter($collection, LegoRepository $lego): Response
    {


        return $this->render("lego.html.twig", [
            'legos' => $lego->findByCollection($collection),
            'collection' =>$lego->findAllCollections()
        ]);
    }

    #[Route('/credits', 'credits')]
    public function credits(CreditsGenerator $credits): Response
    {
        return new Response($credits->getCredits());
    }

   /* #[Route('/test', 'test')]
    public function test(EntityManagerInterface $entityManager): Response
    {
        $l = new Lego(1234);
        $l->setName("Eddy le quartier");
        $l->setCollection();
        $l->setDescription("Le rock est mort");
        $l->setPrice(80.00);
        $l->setPieces(4);
        $l->setBoxImage("./eddy.jfif");
        $l->setLegoImage("./eddy.jfif");

        $entityManager->persist($l);
        $entityManager->flush();
        return new Response('Lego saved with id: '.$l->getId());
    }
*/



}
