<?php

namespace HarmonyHelp\Bundle\HarmonyHelpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HarmonyHelpBundle:Default:index.html.twig', array('name' => $name));
    }
}
