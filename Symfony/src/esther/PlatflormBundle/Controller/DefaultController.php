<?php

namespace esther\PlatflormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('estherPlatformBundle:Default:index.html.twig', array('name' => $name));
    }
}
