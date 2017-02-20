<?php

namespace FormulariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormulariosController extends Controller
{
    public function ANR_EventosAction()
    {        
	return $this->render('FormulariosBundle:Formularios:form_ANREventos.html.twig', array('TITULO' => 'ANR Eventos científicos, tecnológicos y de innovación'));
    }

}
