<?php

namespace GestorDeProjecteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use GestorDeProjecteBundle\Entity\Persona;
use GestorDeProjecteBundle\Form\PersonaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PersonaController extends Controller
{
    public function mostraAltaPersonaAction()
    {
        //pas 1 que retorni el manegador totes les persones
        $repository = $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Persona');

        // find *all* products
        $persones = $repository->findAll();
        return $this->render('GestorDeProjecteBundle:Default:mostraAltaPersona.html.twig',array('persones'=>$persones));	
    }

    public function formulariAltaPersonaAction(Request $request)
    {
        $persones = new Persona();
        $form = $this->createForm(PersonaType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $persones = $form->getData();
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($persones);
            $em->flush();

            //Si té exit que es vegin tots els treballadors
            $repository = $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Persona');

            // find *all* products
            $persones = $repository->findAll();
            return $this->render('GestorDeProjecteBundle:Default:mostraAltaPersona.html.twig',array('persones'=>$persones));
        }

        return $this->render('GestorDeProjecteBundle:Default:formulariAltaPersona.html.twig',array('form'=>$form->createView() ));  
    }

    public function mostraPersonaAction($id = 8)
    {
        //pas 1 recuperem les persones de la entitat
        $repository = $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Persona');

        // busquem a la persona per id
        $persona = $repository->find($id);
        return $this->render('GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig',array('persona'=>$persona));
        //return $this->render('GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig');    
    }
        //ME QUEDAT AQUÍ I ENCARA HO TINC QUE GESTIONAR
    
    public function esborrarPersonaAction($id = 8)
    {   //buscarem la persona de la entitat
        $repository = $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Persona');
        // busquem a la persona per id
        $persona = $repository->find($id);
        if(!$persona){
            //hem de pensar on la redirigim
           
             return $this->render('GestorDeProjecteBundle:Default:personaNoBaixa.html.twig',array('nPila' => $nPila));
        }else{
            $em->remove($persona);
            $em->flush();
            //hem de pensar on la redirigim
            return $this->render('GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig',array('persona'=>$persona));
        }
        
    }
    /**
    public function modificarPErsonaAction($id)
    {
        //buscarem la persona de la entitat
        $repository = $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Persona');
        // busquem a la persona per id
        $persona = $repository->find($id);

        if (!$persona) {
            //la persona no existeix a on la enviem
            return $this->render('GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig',array('persona'=>$persona));
        }

        $product->setName('New product name!');
        em->flush();

        return $this->redirectToRoute('homepage');

    }*/
}
