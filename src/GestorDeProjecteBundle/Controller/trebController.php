<?php

namespace GestorDeProjecteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class trebController extends Controller
{
    public function trebAction()
    {
        return $this->render('GestorDeProjecteBundle:Default:treb.html.twig');
    }
}
