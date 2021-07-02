<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController extends AbstractController
{
    /**
     * @Route("/poker", name="poker")
     * j'utilise l'autowire de Symfony pour instancier automatiquement
     * la classe Request dans une variable $request
     * ce méchanisme est aussi appelé "injections de dépendances
     */
     public function poker()
    {
        $request = Request::createFromGlobals();
        $response = $request->query->get('age');
        if ($response < 18) {
            return new Response('Dégage minot');

        } else {
            return new Response("Venez perdre de l'argent");
            // je fais une redirection vers la route digimon
            // grâce à la méthode redirectToRoute qui existe dans
            // l'AbstractController
            // Ma classe PageController hérite d'AbstractController
            // donc elle hérite aussi de la méthode redirectToRoute
        }
       return $this->redirectToRoute('digimon');

    }

/**
 * @Route("/digimon", name="digimon")
 */
public function digimon()
{
    return new Response("Les digimons");
}

}
