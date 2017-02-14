<?php

namespace FormulariosBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FormulariosBundle\Entity\Roles;

class CargarRoles implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$roles = array (
				array('roles' => 'Administrador'),
				array('roles' => 'Evaluador'),
				array('roles' => 'Postulante'),
				);
		
		foreach ($roles as $r){
			$entidad=new Roles();
			$entidad->SetRol($r['roles']);
			$manager->persist($entidad);
		}
		
		$manager->flush();
	}
}
