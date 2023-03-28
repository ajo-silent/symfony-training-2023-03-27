<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/book')]
class BookController extends AbstractController
{
    #[Route('', name: 'app_book_index')]
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
        ]);
    }

    //#[Route('/show/{id<\d+>}', name: 'app_book_show', defaults: ['id' => 1])]
    #[Route('/show/{id<\d+>}', name: 'app_book_show', defaults: ['id' => 1])]
    public function show($id): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController::show -id: ' . $id,
        ]);
    }
}
