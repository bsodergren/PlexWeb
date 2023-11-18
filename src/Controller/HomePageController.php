<?php

namespace App\Controller;

use App\Entity\VideoDetails;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function homepage(): Response
    {
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
    }

    #[Route('/library/{slug}')]
    public function browse(EntityManagerInterface $entityManager, $slug = null): Response
    {

        $dql = "SELECT * FROM video_details ";
        
        $product = $entityManager->getRepository(VideoDetails::class);
        dump(get_class_methods($product));

    //     if (null !== $slug) {
    //         $dql = $dql . ' WHERE library = "'.$slug.'"';
    //     }
    //     $query = $entityManager->createQuery($dql)
    //                            ->setFirstResult(0)
    //                            ->setMaxResults(100);
    //                            dump($query);
    //     $paginator = new Paginator($query);
    //    // $c = count($paginator);
    //     dump($paginator);
    //     // foreach ($paginator as $post) {
    //     //     echo $post->getHeadline() . "\n";
    //     // }


//$results = $videoResult->setFirstResult(0)->setMaxResults(100);

        return $this->render('grid_display/index.html.twig', [
            'videoDetails' => $product,
        ]);
        
    }
}
