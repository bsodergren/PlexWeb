<?php

namespace App\Controller;

use App\Entity\VideoDetails;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GridDisplayController extends AbstractController
{
    #[Route('/grid/display', name: 'app_grid_display')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $product = $entityManager->getRepository(VideoDetails::class)->findAll();
        // dd($product);

        return $this->render('grid_display/index.html.twig', [
            'videoDetails' => $product,
        ]);
    }
}
