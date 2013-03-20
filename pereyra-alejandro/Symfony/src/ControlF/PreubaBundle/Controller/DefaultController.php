<?php

namespace ControlF\PreubaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ControlFPreubaBundle:Default:index.html.twig', array('name' => $name));
    }
}
