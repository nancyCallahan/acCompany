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

    }
      public function loginAction()
    {
        
       $nif=$_REQUEST['user'];
       //buscarem la persona de la entitat
        $repository = $this->getDoctrine()->getRepository('GestorDeProjecteBundle:Persona');
        // busquem a la persona per id
        $persona = $repository->findByNif($nif);
        if(!$persona){
            //hem de pensar on la redirigim
            $nPila = "No existeix cap usuaria amb aquest dni";
             return $this->render('GestorDeProjecteBundle:Default:personaNoLogin.html.twig',array('nPila' => $nPila));
        }else{
            $repository = $this->getDoctrine()
                ->getRepository('GestorDeProjecte:Persona');
            $query = $repository->createQueryBuilder('p')
                ->where('p.Nif =:user')
                ->andwhere('p.password=:password')
                
                ->getQuery();

            /*$products = $query->getResult();
            $em = $this->getDoctrine()->getManager();
            $em->remove($persona);*/
            $persona = $query->getResult();
            $nPila = "loginCorrecte";
             return $this->render('GestorDeProjecteBundle:Default:personaNoLogin.html.twig',array('nPila' => $nPila));
        }
        
    }
}
