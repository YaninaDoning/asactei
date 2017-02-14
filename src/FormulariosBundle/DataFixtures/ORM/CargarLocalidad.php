<?php

namespace FormulariosBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FormulariosBundle\Entity\Localidad;

class CargarLocalidad implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$localidad = array (

array('nombre' => 'A CASTELLANOS', 'departamento' =>'GENERAL LOPEZ', 'departamento_vid' => 17, 'localidad_vid' => 172900, 'region' => 2),
);
	
		
		foreach ($localidad as $l){
			$entidad=new Localidad();
			$entidad->setNombre($l['nombre']);
			$entidad->setDepartamento($l['departamento']);
			$entidad->setDepartamentoVid($l['departamento_vid']);
			$entidad->setLocalidadVid($l['localidad_vid']);
			$entidad->setRegion($l['region']);

			$manager->persist($entidad);
		}
		
		$manager->flush();
	}
}
