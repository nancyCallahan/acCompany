<?php

namespace GestorDeProjecteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class trebHoresController extends Controller
{
	/**
	*
	*/
    public function trebHoresAction($id)
    {
    	$id = "Maria";
        return $this->render('GestorDeProjecteBundle:Default:trebHores.html.twig', array('id'=>$id));
    }
}
