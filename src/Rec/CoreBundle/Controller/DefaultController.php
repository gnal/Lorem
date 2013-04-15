<?php

namespace Rec\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RecCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
