<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(Request $request): Response
    {
        $term = "";
        if ($request->getMethod() === 'POST') {
            $term = $_POST['q'];
        }

        $themoviedbApiKey = $_ENV['TMDB_API_KEY'];

        // Création du endpoint de l'API (film recherché + clé API)
        $endPoint = 'https://api.themoviedb.org/3/search/movie?api_key=' . 
            $themoviedbApiKey . "&language=fr-FR&page=1" . "&query=" . $term;
        
        // Lancement d'une requête HTTP
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endPoint);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);

        $resultat_curl = curl_exec($ch);

        // On transforme le résultat de cURL en un objet JSON utilisable
        $json = json_decode ( $resultat_curl );

        // Renvoi du JSON
        /**
         * @TODO: tester la valeur de $json avant le renvoi
         */
         echo($term);
         return $this->render('home/index.html.twig', ["movieList" => $json->results]);

        
    }
}
