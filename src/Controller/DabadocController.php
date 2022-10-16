<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DabadocController extends AbstractController
{
    #[Route('/dabadoc', name: 'app_dabadoc')]
    public function index(): Response
    {
        return $this->render('dabadoc/index.html.twig', [
            'controller_name' => 'DabadocController',
        ]);
    }
}
