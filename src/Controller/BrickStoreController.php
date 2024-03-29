<?php



/* indique où "vit" ce fichier */

namespace App\Controller;


/* indique l'utilisation du bon bundle pour gérer nos routes */

use stdClass;
use App\Entity\Brick as Brick;
use App\Service\CreditsGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Repository\BrickRepository;
use App\Repository\BrickCollectionRepository;
use App\Entity\BrickCollection;

/* le nom de la classe doit être cohérent avec le nom du fichier */
class BrickStoreController extends AbstractController
{

    public function __construct(private BrickRepository $brickRepository, private BrickCollectionRepository $brickCollectionRepository) {}

    #[Route('/brick_store', )]
    public function homeAll(): Response
    {
        return $this->render("brick.html.twig", [
            'bricks' => $this->brickRepository->findAll(),
            'collection' =>$this->brickCollectionRepository->findAll(),
        ]);
    }

    #[Route('/{name}', 'filter_by_name', requirements: ['name' => 'Figurines|Nature|Meubles'])]
    public function filter($name, BrickCollection $brickCollection): Response
    {

        // dd($this->legoRepository->findByCollection($name));
        return $this->render("brick.html.twig", [
            'bricks' => $brickCollection->getbrick(),
            'collection' =>$this->brickCollectionRepository->findAll(),
        ]);
    }

}