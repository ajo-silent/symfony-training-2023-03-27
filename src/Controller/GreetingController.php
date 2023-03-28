<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//#[Route('/greeting')]
class GreetingController extends AbstractController
{

    #[Route('', name: 'greeting_index', defaults: ['name' => 'Meier'])]
    public function index(): Response
    {
        return $this->render('greeting/index.html.twig', [
            'controller_name' => 'Landing page',
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('greeting/contact.html.twig', [
            'controller_name' => 'Landing page',
        ]);
    }

    #[Route('/greeting/{name}', name: 'app_greeting', defaults: ['name' => 'Meier'])]
    public function showGreeting(string $name): Response
    {
        return $this->render('greeting/index.html.twig', [
            'controller_name' => 'Hallo Mrs./Mrs. ' . $name,
        ]);
    }
}
