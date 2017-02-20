<?php

namespace FormulariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FormulariosBundle\Entity\Usuario;

class LoginController extends Controller
{
    public function loginAction()
    {        
	return $this->render('FormulariosBundle:Login:login.html.twig', array('TITULO' => 'Ministerio de Ciencia, Tecnología e Innovación Productiva'));
    }

    public function nuevoUsuarioAction()
    {    
	return $this->render('FormulariosBundle:Login:nuevoUsuario.html.twig', array('TITULO' => 'Ministerio de Ciencia, Tecnología e Innovación Productiva',));
    }

    public function validateAction()
    {
	$usuario = new Usuario();
	$validator = $this-> get('validator');
	$errors = $validator->validate($usuario);

	if (count($errors) > 0){       
		return $this->render('FormulariosBundle:Login:validarUsuario.html.twig', array('errors' => $errors,));
	} else {
		return new Response('El Usuario es válido');
	} 

    }
}
