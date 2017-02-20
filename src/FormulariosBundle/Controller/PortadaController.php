<?php

namespace FormulariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortadaController extends Controller
{
    public function portadaAction()
    {        
	return $this->render('FormulariosBundle:Proyectos:portada_proyectos.html.twig', array('TITULO' => 'Ministerio de Ciencia, Tecnología e Innovación Productiva'));
    }

}
