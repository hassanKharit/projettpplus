<?php

namespace App\Controller;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]

    public function index(MailerInterface $mailer, Request $request ): Response
    {
        $form=$this->createForm(contactType::class);
        return $this->renderForm('contact/traitement.html.twig', [
            'form' => $form,


        // if($form->isSubmitted() && $form->isValid())
        // {
        //     $data=$form->getData();
        
        
        ]);
        }

    //  $form=$this->createForm('contact/index.html.twig')
    // 'form' => $form,

    // }
}