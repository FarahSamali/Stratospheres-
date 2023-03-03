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
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mailer\MailerInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use App\Service\UploaderService;
use App\Service\MailerService;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Service\PdfService;




class ParticipationController extends AbstractController
{
    #[Route('/home', name: 'app_participation')]
    public function index(): Response
    {
        return $this->render('back.html.twig', [
            'controller_name' => 'ParticipationController',
        ]);
    }
    #[Route('/addpartic', name: 'add_Participation')]
    public function addpartic(Request  $request,ManagerRegistry $doctrine/*,VerifyEmailHelperInterface $verifyEmailHelper, UploaderService $uploaderService, MailerService $mailer*/)
    {
        $participation= new Participation();
        $form= $this->createForm(ParticipationType::class,$participation);
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){
            $em=$doctrine->getManager();
            $em->persist($participation);
            $em->flush();
            /*$message='ajouter';
          $mailMessage = $participation->getNom().''.$participation->getPrenom().''.$message;
          $mailer->sendEmail(content: $mailMessage);*/
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
    #[Route('/showEvenement/{id}', name: 'showEvenement')]
    public function showEvenement(ParticipationRepository $repo,$id,EvenementRepository $repository)
    {
        $event= $repository->find($id);
        $participation= $repo->getParticipationByEvenement($id);
        return $this->render("participation/showEvenement.html.twig",
            array("tabEvent"=>$event,
                "tabPartic"=>$participation));
    }

    #[Route('/listPartic/pdf/{id}', name: 'participation.pdf')]
    public function generatePdfParticipation(Participation $participation = null, PdfService $pdf) {
        $html = $this->render('participation/list.html.twig', ['tabPartic' => $participation]);
        $pdf->showPdfFile($html);
    }



}
