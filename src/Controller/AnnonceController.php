<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Form\AnnonceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\AnnonceRepository;
//use App\Controller\AnnonceController;



class AnnonceController extends AbstractController
{
    #[Route('/annonce', name: 'app_annonce')] //, name: 'app_annonce'
    public function index(): Response
    {
        return $this->render('annonce/index.html.twig', [
            'controller_name' => 'AnnonceController',
        ]);
    }

    #[Route('/addannonceForm',name:'addannonceForm')]
    public function addForm (Request  $request,ManagerRegistry $doctrine)
    {
        $annonce= new Annonce();
        $form= $this->createForm(AnnonceType::class,$annonce);
        $form->handleRequest($request) ;
        if($form->isSubmitted()){
            $em= $doctrine->getManager();
            $em->persist($annonce);
            $em->flush();
            return  $this->redirectToRoute('addannonceForm');
        }
        return $this->render("annonce/add.html.twig",['f'=>$form->createView()]);
    }

    #[Route('/updateannonce/{id}')]
    public function updateForm($id,AnnonceRepository  $repository,Request  $request,ManagerRegistry $doctrine)
    {
        $annonce= $repository->find($id);
        $form= $this->createForm(AnnonceType::class,$annonce);
        $form->handleRequest($request) ;
        if($form->isSubmitted()){
            $em= $doctrine->getManager();
            $em->flush();
            return  $this->redirectToRoute('addannonceForm');
        }
        return $this->render("annonce/update.html.twig",['f'=>$form->createView()]);
    }

    #[Route('/removeannonce/{id}')]
    public function remove(ManagerRegistry $doctrine,$id,AnnonceRepository $repository)
    {
        $annonce= $repository->find($id);
        $em= $doctrine->getManager();
        $em->remove($annonce);
        $em->flush();
        return $this->redirectToRoute("addannonceForm");
    }
    #[Route('/annoncelist')]
    public function list (AnnonceRepository $repository)
    {   $annonce=$repository->findAll();
        return $this->render("annonce/annonce.html.twig",array("tabann"=>$annonce));
    }


}
