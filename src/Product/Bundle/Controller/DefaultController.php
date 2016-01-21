<?php

namespace Product\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse; // N'oubliez pas ce use


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProductBundle:Default:index.html.twig', array('name' => $name));
    }

   /* public function testroutingAction()
    {
        $test="test path ok";
        return $this->render('ProductBundle:Default:testrouting.html.twig', array('test' => $test));
    }*/
}
