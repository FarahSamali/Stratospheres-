<?php

namespace App\Controller;

use App\Entity\NotifyAlert;
use App\Form\NotifyAlertType;
use App\Repository\NotifyAlertRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/notifyalert')]
class NotifyAlertController extends AbstractController
{
    #[Route('/', name: 'app_notify_alert_index', methods: ['GET'])]
    public function index(NotifyAlertRepository $notifyAlertRepository): Response
    {
        return $this->render('notify_alert/index.html.twig', [
            'notify_alerts' => $notifyAlertRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_notify_alert_new', methods: ['GET', 'POST'])]
    public function new(Request $request, NotifyAlertRepository $notifyAlertRepository): Response
    {
        $notifyAlert = new NotifyAlert();
        $form = $this->createForm(NotifyAlertType::class, $notifyAlert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $notifyAlertRepository->save($notifyAlert, true);

            return $this->redirectToRoute('app_notify_alert_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('notify_alert/new.html.twig', [
            'notify_alert' => $notifyAlert,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_notify_alert_show', methods: ['GET'])]
    public function show(NotifyAlert $notifyAlert): Response
    {
        return $this->render('notify_alert/show.html.twig', [
            'notify_alert' => $notifyAlert,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_notify_alert_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, NotifyAlert $notifyAlert, NotifyAlertRepository $notifyAlertRepository): Response
    {
        $form = $this->createForm(NotifyAlertType::class, $notifyAlert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $notifyAlertRepository->save($notifyAlert, true);

            return $this->redirectToRoute('app_notify_alert_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('notify_alert/edit.html.twig', [
            'notify_alert' => $notifyAlert,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_notify_alert_delete', methods: ['POST'])]
    public function delete(Request $request, NotifyAlert $notifyAlert, NotifyAlertRepository $notifyAlertRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$notifyAlert->getId(), $request->request->get('_token'))) {
            $notifyAlertRepository->remove($notifyAlert, true);
        }

        return $this->redirectToRoute('app_notify_alert_index', [], Response::HTTP_SEE_OTHER);
    }
}
