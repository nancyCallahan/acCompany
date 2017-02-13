<?php

namespace GestorDeProjecteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use elMeuPrimerBundle\Entity\Persona;
use elMeuPrimerBundle\Form\PersonaType;
use Symfony\Component\HttpFoundation\Request;

class adminController extends Controller
{
    public function altaAction()
    {
    	$repository= $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Persona');
    	$Persona=$repository->findAll();
        return $this->render('GestorDeProjecteBundle:Default:mostraAltaPersona.html.twig',array('Persona'=>$Persona));
    }
    public function personaAltaAction(Request $request)
    {	
    	$Persona = new Persona();
    	$form = $this->createForm(PersonaType::class);
    	$form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
	        // $form->getData() holds the submitted values
	        // but, the original `$task` variable has also been updated
	        $Persona = $form->getData();

	        // ... perform some action, such as saving the task to the database
	        // for example, if Task is a Doctrine entity, save it!
	         $em = $this->getDoctrine()->getManager();
	         $em->persist($Persona);
	         $em->flush();

	         $repository = $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Persona');
	         // find *all* events
			 $events = $repository->findAll();
	         return $this->render('GestorDeProjecteBundle:formulariAltaPersona.html.twig',array('Persona'=>$Persona));
    	}

    	return $this->render('elMeuPrimerBundle:Eventos:nou.html.twig',array('form'=>$form->createView() ));
    }

}
