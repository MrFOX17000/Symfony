<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RateController extends AbstractController
{
    #[Route('/rate', name: 'app_rate')]
    public function rate(): Response
    {
        return new Response(content:'Votre note : ', status: 200);
    }
}
