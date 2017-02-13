<?php

namespace GestorDeProjecteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class consConsuProjController extends Controller
{
    public function consConsuProjAction()
    {
        return $this->render('GestorDeProjecteBundle:Default:consConsuProj.html.twig');
    }
}
