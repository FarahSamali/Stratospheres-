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
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;


class AnnonceController extends AbstractController
{
    #[Route('/annonce', name: 'app_annonce')] //, name: 'app_annonce'
    public function index(): Response
    {
        return $this->render('admin/admin.html.twig', [
            'controller_name' => 'AnnonceController',
        ]);
    }

    #[Route('/addannonceForm', name: 'addannonceForm')]
    public function addForm(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger)
    {
        $annonce = new Annonce();
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $brochureFile */
            $photo = $form->get('photo')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($photo) {
                $originalFilename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photo->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $photo->move(
                        $this->getParameter('annonce_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $annonce->setImage($newFilename);
            }

            $em = $doctrine->getManager();
            $etat = $request->get("etat");
            $annonce->setEtat($etat);
            $cat = $request->get("categorie");
            $annonce->setCategorie($cat);
            // var_dump($annonce); die();
            $em->persist($annonce);
            $em->flush();
            return $this->redirectToRoute('annonce_aff');
        }
        return $this->render("annonce/add.html.twig", ['f' => $form->createView()]);
    }

    #[Route('/updateannonce/{id}', name: 'annonce_upd')]
    public function updateForm($id, AnnonceRepository $repository, Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger)
    {
        $annonce = $repository->find($id);
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $etat = $request->get("etat");
            $annonce->setEtat($etat);
            $cat = $request->get("categorie");
            $annonce->setCategorie($cat);

            $em->flush();
            return $this->redirectToRoute('annonce_aff');
        }
        return $this->render("annonce/update.html.twig", ['f' => $form->createView()]);
    }

    #[Route('/removeannonce/{id}', name: 'annonce_rem')]
    public function removeann(ManagerRegistry $doctrine, $id, AnnonceRepository $repository)
    {
        $annonce = $repository->find($id);
        $em = $doctrine->getManager();
        $em->remove($annonce);
        $em->flush();
        return $this->redirectToRoute("annonce_aff");
    }

    #[Route('/annoncelist', name: 'annonce_aff')]
    public function list(AnnonceRepository $repository)
    {
        $annonce = $repository->findAll();
        return $this->render("annonce/annonce.html.twig", array("f" => $annonce));
    }


    #[Route('/annoncesingle/{id}', name: 'annonce_single')]
    public function single(AnnonceRepository $repository, $id)
    {
        $annonce = $repository->find($id);
        return $this->render("annonce/oneannonce.html.twig", array("annonce" => $annonce));
    }
////Back
    #[Route('/annoncelist2', name: 'annonce_aff2')]
    public function list2(AnnonceRepository $repository)
    {
        $annonce = $repository->findAll();
        return $this->render("admin/admin.html.twig", array("f" => $annonce));
    }

}
