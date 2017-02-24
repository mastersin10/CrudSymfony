<?php

namespace ExamenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ExamenBundle:Default:index.html.twig');
    }
}
