<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class EvenementController extends AbstractController
{
    #[Route('/evenement', name: 'app_evenement')]
    public function index(): Response
    {
        return $this->render('Admin/form.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }

    #[Route('/addevent', name: 'add_event')]
    public function addevent(Request  $request,ManagerRegistry $doctrine)
    {
        $event= new Evenement();
        $form= $this->createForm(EvenementType::class,$event);
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){
          /*  $file=$event->getImage();
            $filename = md5(uniqid()) . '.' . $file->guessExtension();

            $file->move(
                $this->getParameter('photos_directory'),
                $filename);

            $event->setImage($filename);*/
            $em=$doctrine->getManager();
            $em->persist($event);
            $em->flush();
            return  $this->redirectToRoute("add_event");
        }
        return $this->render("evenement/add.html.twig",['form'=> $form->createView()]);

    }

    #[Route('/listEvent', name: 'listevent')]
    public function listEvent(EvenementRepository $repository)
    {
        $event= $repository->findAll();
        return $this->render("evenement/list.html.twig",array("tabEvent"=>$event));
    }

    #[Route('/listEventFront', name: 'listeventFront')]
    public function listEventFront(EvenementRepository $repository)
    {
        $event= $repository->findAll();
        return $this->render("evenement/listFront.html.twig",array("tabEvent"=>$event));
    }
    #[Route('/removeEvent/{id}', name: 'remove_Event')]
    public function remove(ManagerRegistry $doctrine,$id,EvenementRepository $repository)
    {
        $event= $repository->find($id);
        $em= $doctrine->getManager();
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute("listevent");
    }
    #[Route('/updateEvent/{id}', name: 'update_Event')]
    public function updateEventForm($id,EvenementType  $repository,Request  $request,ManagerRegistry $doctrine)
    {
        $event=$this->getDoctrine()->getRepository(Evenement::class)->find($id);
        $form= $this->createForm(EvenementType::class,$event);
        $form->handleRequest($request) ;
        if($form->isSubmitted()){
            $em= $doctrine->getManager();
            $em->flush();
            return  $this->redirectToRoute("listevent");
        }
        return $this->render("evenement/update.html.twig",['form'=> $form->createView()]);
    }
   /* #[Route('/showParticipation/{id}', name: 'showParticipation')]
    public function showParticipation(EvenementRepository $repo,$id,ParticipationRepository $repository)
    {
        $participation= $repository->find($id);
        $event= $repo->getEvenementByParticipation($id);
        return $this->render("evenement/list.html.twig",
            array("participations"=>$participation,
                "evenement"=>$event));
    }*/


}
