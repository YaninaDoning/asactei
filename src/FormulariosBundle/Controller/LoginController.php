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
	$request = $this->getRequest();

	$repetir_usu = $this->get('usuario.datos')->BuscarEmail($request->request->get('email'));

	$usuario = $this->get('usuario.datos')->SetUsuario($request);
	$validator = $this-> get('validator');
	$errors = $validator->validate($usuario);

	if ($repetir_usu != NULL){
		$error_unico='El usuario ingresado ya existe';
		$errors='';
	}
	else if ($request->request->get('password') != $request->request->get('password_verify')){
		$error_unico='No coinciden las contraseñas';
		$errors='';
	}
	else if (count($errors) > 0){  
		$error_unico='';
	} 
	else {
		return $this->AgregarUsuarioAction($usuario);
	} 

	return $this->render('FormulariosBundle:Login:validarUsuario.html.twig', 
			array('TITULO' => 'Ministerio de Ciencia, Tecnología e Innovación Productiva',
			'error_unico' => $error_unico,
			'errors' => $errors,			
			'apellido' => $request->request->get('apellido'),
			'nombre' => $request->request->get('nombre'),
			'email' => $request->request->get('email'),
			'telefono' => $request->request->get('telefono'),
			'organizacion' => $request->request->get('organizacion'),
			'password' => $request->request->get('password'),
			'password_verify' => $request->request->get('password_verify'),
			));

    }

    public function AgregarUsuarioAction($usuario)
    {

	$em = $this->getDoctrine()->getManager();
	$em->persist($usuario);
	$em->flush();

	return $this->loginAction();
    }
	
}
