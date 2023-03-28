<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    #[Route('/movie', name: 'app_movie_index')]
    public function index(): Response
    {
        return $this->render('movie/index.html.twig', [
            'controller_name' => 'MovieController',
        ]);
    }

    #[Route('/movie/{id<\d+>}', name: 'app_movie_details')]
    public function details(int $id): Response
    {
        $movie = [
            'id' => $id,
            'title' => 'Star Wars - Episode IV : A New Hope',
            'releasedAt' => new \DateTimeImmutable('25 May 1977'),
            'genre' => ['Action', 'Adventure', 'Fantasy'],
        ];

        return $this->render('movie/movie.html.twig', [
            'controller_name' => 'MovieController::details',
            'movie' => $movie,
        ]);

    }
}
