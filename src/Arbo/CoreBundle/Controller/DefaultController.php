<?php

namespace Arbo\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ArboCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
