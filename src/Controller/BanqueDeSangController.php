<?php

namespace App\Controller;

use App\Entity\BanqueDeSang;
use App\Form\BanqueDeSangType;
use App\Repository\BanqueDeSangRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/banquedesang')]
class BanqueDeSangController extends AbstractController
{
    #[Route('/', name: 'app_banque_de_sang_index', methods: ['GET'])]
    public function index(BanqueDeSangRepository $banqueDeSangRepository): Response
    {
        return $this->render('banque_de_sang/index.html.twig', [
            'banque_de_sangs' => $banqueDeSangRepository->findAll(),
        ]);
    }
    #[Route('/liste', name: 'app_banque_de_sang_liste', methods: ['GET'])]
    public function liste(BanqueDeSangRepository $banqueDeSangRepository): Response
    {
        return $this->render('banque_de_sang/liste.html.twig', [
            'banque_de_sangs' => $banqueDeSangRepository->findAll(),
        ]);
    }
    #[Route('/new', name: 'app_banque_de_sang_new', methods: ['GET', 'POST'])]
    public function new(Request $request, BanqueDeSangRepository $banqueDeSangRepository): Response
    {
        $banqueDeSang = new BanqueDeSang();
        $form = $this->createForm(BanqueDeSangType::class, $banqueDeSang);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $banqueDeSangRepository->save($banqueDeSang, true);

            return $this->redirectToRoute('app_banque_de_sang_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('banque_de_sang/new.html.twig', [
            'banque_de_sang' => $banqueDeSang,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_banque_de_sang_show', methods: ['GET'])]
    public function show(BanqueDeSang $banqueDeSang): Response
    {
        return $this->render('banque_de_sang/show.html.twig', [
            'banque_de_sang' => $banqueDeSang,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_banque_de_sang_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, BanqueDeSang $banqueDeSang, BanqueDeSangRepository $banqueDeSangRepository): Response
    {
        $form = $this->createForm(BanqueDeSangType::class, $banqueDeSang);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $banqueDeSangRepository->save($banqueDeSang, true);

            return $this->redirectToRoute('app_banque_de_sang_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('banque_de_sang/edit.html.twig', [
            'banque_de_sang' => $banqueDeSang,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_banque_de_sang_delete', methods: ['POST'])]
    public function delete(Request $request, BanqueDeSang $banqueDeSang, BanqueDeSangRepository $banqueDeSangRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$banqueDeSang->getId(), $request->request->get('_token'))) {
            $banqueDeSangRepository->remove($banqueDeSang, true);
        }

        return $this->redirectToRoute('app_banque_de_sang_index', [], Response::HTTP_SEE_OTHER);
    }
}
