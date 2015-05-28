<?php

namespace Axv\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/*
*   Fichier de test
*
*/
class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AxvTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
