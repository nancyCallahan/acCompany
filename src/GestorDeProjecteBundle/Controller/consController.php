<?php

namespace GestorDeProjecteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class consController extends Controller
{
    public function consAction()
    {
        return $this->render('GestorDeProjecteBundle:Default:cons.html.twig');
    }
}
