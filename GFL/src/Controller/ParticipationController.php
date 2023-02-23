<?php

namespace App\Controller;

use App\Entity\Participation;
use App\Form\ParticipationType;
use App\Repository\EvenementRepository;
use App\Repository\ParticipationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParticipationController extends AbstractController
{
    #[Route('/participation', name: 'app_participation')]
    public function index(): Response
    {
        return $this->render('participation/add.html.twig', [
            'controller_name' => 'ParticipationController',
        ]);
    }
    #[Route('/addpartic', name: 'add_Participation')]
    public function addpartic(Request  $request,ManagerRegistry $doctrine)
    {
        $participation= new Participation();
        $form= $this->createForm(ParticipationType::class,$participation);
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){
            $em=$doctrine->getManager();
            $em->persist($participation);
            $em->flush();
            return  $this->redirectToRoute("add_Participation");
        }
        return $this->renderForm("participation/add.html.twig",array("FormPartic"=>$form));

    }
    #[Route('/listPartic', name: 'listPartic')]
    public function listPartic(ParticipationRepository $repository)
    {
        $participation= $repository->findAll();
        return $this->render("Participation/list.html.twig",array("tabPartic"=>$participation));
    }
    #[Route('/removePartic/{id}', name: 'remove_Partic')]
    public function remove(ManagerRegistry $doctrine,$id,ParticipationRepository $repository)
    {
        $participation= $repository->find($id);
        $em= $doctrine->getManager();
        $em->remove($participation);
        $em->flush();
        return $this->redirectToRoute("listPartic");
    }
    #[Route('/updatePartic/{id}', name: 'update_Partic')]
    public function updateParticForm($id,ParticipationType  $repository,Request  $request,ManagerRegistry $doctrine)
    {
        $participation=$this->getDoctrine()->getRepository(Participation::class)->find($id);
        $form= $this->createForm(ParticipationType::class,$participation);
        $form->handleRequest($request) ;
        if($form->isSubmitted()){
            $em= $doctrine->getManager();
            $em->flush();
            return  $this->redirectToRoute("listPartic");
        }
        return $this->renderForm("participation/update.html.twig",array("FormPartic"=>$form));
    }

}
