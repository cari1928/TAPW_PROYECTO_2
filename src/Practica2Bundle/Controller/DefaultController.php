<?php

namespace Practica2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Practica2Bundle:Default:index.html.twig');
    }
}
