<?php

namespace Arbo\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EstimateController extends Controller
{
    public function sendAction()
    {
        $estimate = $this->get('arbo_core.estimate_manager')->getOneBy(['a.id' => $this->getRequest()->attributes->get('id')]);

        $rendered = $this->renderView('ArboCoreBundle:Estimate:email.html.twig', ['estimate' => $estimate]);
        $message = \Swift_Message::newInstance()
            ->setSubject('Estimation Arbosoin')
            ->setFrom('info@arbosoin.com')
            ->setTo('alexisjoubert@groupemsi.com')
            ->setBody($rendered, 'text/html');
        $this->get('mailer')->send($message);

        $this->get('session')->getFlashBag()->add('success', 'Le message a été envoyé.');

        return $this->redirect($this->generateUrl('arbo_core_estimate_admin_list'));
    }
}
