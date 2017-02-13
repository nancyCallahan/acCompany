<?php

namespace GestorDeProjecteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class adminController extends Controller
{
    public function altaAction()
    {
    	$repository= $this->getDoctrine()->('GestorDeProjecteBundle:Persona');
    	$Persona=$repository->findAll();
        return $this->render('GestorDeProjecteBundle:Default:formulariAltaPersona.html.twig',array('Persona'=>$Persona));
    }
}
