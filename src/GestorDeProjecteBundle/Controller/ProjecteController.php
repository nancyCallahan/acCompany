<?php

namespace GestorDeProjecteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use GestorDeProjecteBundle\Entity\Projecte;
use GestorDeProjecteBundle\Form\ProjecteType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProjecteController extends Controller
{
    public function mostraAltaProjecteAction()
    {
        //pas 1 que retorni el manegador totes les persones
        $repository = $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Projecte');

        // find *all* products
        $projectes = $repository->findAll();
        return $this->render('GestorDeProjecteBundle:Default:mostraAltaProjectes.html.twig',array('projectes'=>$projectes));	
    }

    public function formulariAltaProjecteAction(Request $request)
    {   $nPila = "Maria";
        return $this->render('GestorDeProjecteBundle:Default:personaNoBaixa.html.twig',array('nPila' => $nPila));


        

        $projectes = new Projecte();
        $form = $this->createForm(ProjecteType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $projectes = $form->getData();
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($projectes);
            $em->flush();

            //Si té exit que es vegin tots els treballadors
            $repository = $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Projecte');

            // find *all* products
            $projectes = $repository->findAll();
            return $this->render('GestorDeProjecteBundle:Default:mostraAltaProjectes.html.twig',array('projectes'=>$projectes));
        }

        return $this->render('GestorDeProjecteBundle:Default:formulariAltaProjecte.html.twig',array('form'=>$form->createView() )); 
    }

    public function mostraPersonaAction()
    {
        $id = 2;
        //pas 1 recuperem les persones de la entitat
        $repository = $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Persona');

        // busquem a la persona per id
        $persona = $repository->find($id);
        return $this->render('GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig',array('persona'=>$persona));
        //return $this->render('GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig');    
    }
        //ME QUEDAT AQUÍ I ENCARA HO TINC QUE GESTIONAR
    
    public function esborrarPersonaAction()
    {
        $id = 1;
       //buscarem la persona de la entitat
        $repository = $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Persona');
        // busquem a la persona per id
        $persona = $repository->find($id);
        if(!$persona){
            //hem de pensar on la redirigim
            $nPila = "No s'ha pogut donar de baixa aquesta persona";
             return $this->render('GestorDeProjecteBundle:Default:personaNoBaixa.html.twig',array('nPila' => $nPila));
        }else{
            $em = $this->getDoctrine()->getManager();
            $em->remove($persona);
            $em->flush();
            $nPila = "Baixa de persona correcte";
             return $this->render('GestorDeProjecteBundle:Default:personaNoBaixa.html.twig',array('nPila' => $nPila));
        }
        
    }
    /*
    public function modificaPersonaAction()
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

        
        //buscarem la persona de la entitat
        $repository = $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Persona');
        // busquem a la persona per id
        $persona = $repository->find($id);

        if (!$persona) {
            //la persona no existeix a on la enviem
            return $this->render('GestorDeProjecteBundle:Default:mostraUnaPersona.html.twig',array('persona'=>$persona));
        }

        $product->setName('New product name!');
        $em->flush();

        return $this->redirectToRoute('homepage');

    }*/
}
