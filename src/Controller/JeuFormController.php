<?php

namespace App\Controller;

use App\Form\FormJeuType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class JeuFormController extends AbstractController
{
    #[Route('/jeu', name: 'app_jeu')]
    public function index(Request $request): Response
    {
        $form=$this->createForm(FormJeuType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $data=$form->getData();

            $data['alea']=rand(0,100);

            if($data['alea']==$data['number']){
                $data['reponse']="vous avez gagner";
            }else{
                $data['reponse']="vous avez perdu";
            }

            return $this->render('jeu_form/traitement.html.twig', [
                'jeu'=>$data,
            ]);

        }
        return $this->renderForm('jeu_form/index.html.twig', [
            'form' => $form,
        ]);
    }
}
