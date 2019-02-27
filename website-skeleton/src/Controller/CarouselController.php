<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CarouselController extends AbstractController
{
    /**
     * @Route("/carousel", name="carousel")
     */
    public function index()
    {
        return $this->render('carousel/index.html.twig', [
            'controller_name' => 'CarouselController',
        ]);
    }
}
