<?php
declare (strict_types = 1);

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//#[Route('/contact', name: 'app_contact', methods: ['GET'])]
class ContactController extends AbstractController {
//    public function __invoke() {
//        $contact = new Contact();
//        $form = $this->createForm(ContactType::class, $contact);
//
//        return $this->render('greeting/contact.html.twig', [
//            'form' => $form,
//        ]);
//    }

    #[Route('/contact', name: 'app_contact_index')]
    public function index(): Response {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        return $this->render('greeting/contact.html.twig', [
//            'name' => 'Contact index',
            'form' => $form,
        ]);
    }

}