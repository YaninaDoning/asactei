<?php

namespace FormulariosBundle\Model;

use Doctrine\Common\Persistence\ObjectManager;
use FormulariosBundle\Entity\Usuario;

class UsuarioModel
{
	private $repository;
	
	public function __construct(ObjectManager $om){
		$this->repository = $om->getRepository('FormulariosBundle:Usuario');
	}	

	public function BuscarEmail($email)
	{
		return $this->repository->findOneBy(array('email'  => $email)); 
	} 

	public function SetUsuario($request)
	{	
		$usuario = new Usuario();
		$usuario->setApellido($request->request->get('apellido'));
		$usuario->setNombre($request->request->get('nombre'));
		$usuario->setOrganizacion($request->request->get('organizacion'));
		$usuario->setEmail($request->request->get('email'));
		$usuario->setPassword($request->request->get('password'));
		$usuario->setTelefono($request->request->get('telefono'));
		$usuario->setRoles("3");
		$usuario->setCreado(new \DateTime('now'));
		$usuario->setHabilitado(true);
		$usuario->setHash('asdasd');
		$usuario->setSalt('asdasd');
		return $usuario;
	} 
	
}
