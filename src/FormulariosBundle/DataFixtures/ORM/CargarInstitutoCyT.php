<?php

namespace FormulariosBundle\DataFixture\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FormulariosBundle\Entity\InstitutoCyT;


class CargarInstitucionCyT implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$instituto_cyt = New InstitutoCyT();
		$instituto_cyt->SetNombre('Centro de Innovación Tecnológica, Empresarial y Social SA');
		$instituto_cyt->setHabilitado(0);

		$manager->persist($instituto_cyt);
		$manager>flush();
	}
}
