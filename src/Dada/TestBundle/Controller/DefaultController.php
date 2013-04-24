<?php

namespace Dada\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DadaTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
