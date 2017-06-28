<?php

namespace LMC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LMCAdminBundle:Default:index.html.twig');
    }
}
