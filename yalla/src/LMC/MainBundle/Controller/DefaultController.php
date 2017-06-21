<?php

namespace LMC\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LMCMainBundle:Default:index.html.twig');
    }
}
