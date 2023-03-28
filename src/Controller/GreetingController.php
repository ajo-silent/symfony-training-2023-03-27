<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//#[Route('/greeting')]
class GreetingController extends AbstractController
{

    #[Route('', name: 'greeting_index', defaults: ['name' => 'Meier'])]
    public function index(MovieRepository $repo): Response
//    public function index(EntityManagerInterface $manager): Response
    {
        #$this->container->get('')
//        $movies = $manager->createQuery(
//            'SELECT m FROM App\Entity\Movie
//            LIMIT 2'
//        );

        #print_r($movies);
//        foreach ($movies as $movie) {
//            print_r($movie->ge)
//        }

        return $this->render('greeting/index.html.twig', [
            'controller_name' => 'Landing page',
            'movies' => $repo->findBy([], ['id' => 'DESC'], 6),
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
