<?php

namespace FormulariosBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FormulariosBundle\Entity\InstitutoCyT;


class CargarInstituto_cyt implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$instituto_cyt = array (
				array('nombre' => 'Centro de Innovación Tecnológica, Empresarial y Social SA', 'habilitado' => 0),
				array('nombre' => 'CONICET | Centro Científico Tecnológico - Santa Fe', 'habilitado' => 0),
				array('nombre' => 'CONICET | Centro Científico Tecnológico - Rosario', 'habilitado' => 0),
				array('nombre' => 'UNIVERSIDAD NACIONAL DEL LITORAL (UNL)', 'habilitado' => 0),
				array('nombre' => 'UNIVERSIDAD NACIONAL DE ROSARIO (UNR)', 'habilitado' => 0),
				array('nombre' => 'UNIVERSIDAD TECNOLÓGICA NACIONAL (UTN)', 'habilitado' => 0),
				array('nombre' => 'UNIVERSIDAD AUSTRAL - Rosario', 'habilitado' => 0),
				array('nombre' => 'Pontificia Universidad Católica Argentina - Rosario', 'habilitado' => 0),
				array('nombre' => 'Universidad Abierta Interamericana (UAI) - Sede Rosario', 'habilitado' => 0),
				array('nombre' => 'Universidad del Centro Educativo Latinoamericano (UCEL)', 'habilitado' => 0),
				array('nombre' => 'Universidad Católica de Santa Fe', 'habilitado' => 0),
				array('nombre' => 'Universidad Católica de La Plata - Sede Rosario', 'habilitado' => 0),
				array('nombre' => 'Universidad Católica de Santiago del Estero - Dto. Académico Rafaela', 'habilitado' => 0),
				array('nombre' => 'INTA', 'habilitado' => 0),
				array('nombre' => 'INTI', 'habilitado' => 0),
				array('nombre' => 'Instituto de la Salud Juan Lazarte Asociación Civil', 'habilitado' => 0),
				array('nombre' => 'Grupo Polo Tecnológico Rosario Asociación Civil', 'habilitado' => 0),
				array('nombre' => 'Fundación CIDETER', 'habilitado' => 0),
				array('nombre' => 'Ministerio de la Producción del Gobierno de la Provincia de Santa Fe', 'habilitado' => 0),
				array('nombre' => 'Ministerio de Panificación Federal, Inversión Pública y Servicios de la República Argentina', 'habilitado' => 0),
				);
		
		foreach ($instituto_cyt as $i){
			$entidad=new InstitutoCyT();
			$entidad->SetNombre($i['nombre']);
			$entidad->setHabilitado($i['habilitado']);
			$manager->persist($entidad);
		}
		
		$manager->flush();
	}
}
