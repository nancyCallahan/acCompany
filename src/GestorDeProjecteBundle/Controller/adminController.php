<?php

namespace GestorDeProjecteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class adminController extends Controller
{
    public function adminAction()
    {
        return $this->render('GestorDeProjecteBundle:Default:admin.html.twig');
    }
}
