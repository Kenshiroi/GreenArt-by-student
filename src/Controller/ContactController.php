<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mailer\MailerInterface;

class ContactController extends AbstractController
{
    

    #[Route('/contact', name: 'app_contact', methods: ['GET', 'POST'])]
    public function new(Request $request, ContactRepository $contactRepository, MailerInterface $mailer): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contactRepository->save($contact, true);
            $email = (new TemplatedEmail())
            ->from($form->get('email')->getData())
            ->to(new Address('admin@bonk.com', 'mailbot'))
            ->subject($form->get('sujet')->getData())
            ->text($form->get('description')->getData());
    

        $mailer->send($email);

            return $this->redirectToRoute('app_main', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contact/new.html.twig', [
            'contact' => $contact,
            'form' => $form,
        ]);
    }

    
}
