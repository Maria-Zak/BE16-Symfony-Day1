<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomNumberController extends AbstractController
{
    #[Route('/random/number', name: 'app_random_number')]
    public function index(): Response
    {
        return $this->render('random_number/index.html.twig', [
            'controller_name' => 'RandomNumberController',
        ]);
    }
    #[Route("new/{max}", name:"random_number")]
    public function number($max): Response
{
    $number = random_int(0,$max);
    return $this->render('random_number/random.html.twig', [
        'randomNumber' => $number,
    ]);
}

}
