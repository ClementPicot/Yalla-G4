<?php

namespace LMC\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

  public function indexAction()
  {
    return $this->render('LMCMainBundle:Default:home.html.twig', array(
    ));
  }
}
