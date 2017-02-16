<?php

namespace FormulariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function loginAction()
    {        
	return $this->render('FormulariosBundle:Login:login.html.twig');
    }

    public function nuevoUsuarioAction()
    {        
	return $this->render('FormulariosBundle:Login:nuevoUsuario.html.twig');

    }
}
