<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GridDisplayController extends AbstractController
{
    #[Route('/grid/display', name: 'app_grid_display')]
    public function index(): Response
    {
        return $this->render('grid_display/index.html.twig', [
            'controller_name' => 'GridDisplayController',
        ]);
    }
}
