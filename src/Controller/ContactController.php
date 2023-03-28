<?php
declare (strict_types = 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contact', name: 'app_contact', methods: ['GET'])]
class ContactController extends AbstractController {
    public function __invoke() {
        return $this->render('greeting/contact.html.twig');
    }

}