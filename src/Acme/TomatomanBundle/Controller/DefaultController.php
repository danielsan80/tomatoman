<?php

namespace Acme\TomatomanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    public function indexAction($name = 'world')
    {
        return $this->render('AcmeTomatomanBundle:Default:index.html.twig', array('name' => $name));
    }
}
