<?php

namespace FormulariosBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FormulariosBundle\Entity\UVT;

class CargarUVT implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$uvt = array (

array('nombre' => 'FUNDACION POTENCIAR' , 'domicilio' => 'Alem 323', 'localidad' => 'Rafaela', 'telefono' => '03492 - 501463' , 'fax' => '03492 - 501463' , 'cp' => '2300' , 'email' => 'direccion@fundacionpotenciar.org.ar, florenciarusch@gmail.com \n' , 'habilitado' => 0),
array('nombre' => 'FUNDACION PARA LA PROMOCION CIENTIFICO-TECNOLOGICA DE ROSARIO Y SU REGION (ROSCYTEC)' , 'domicilio' => 'Bv. 27 de Febrero 210 Bis', 'localidad' => 'Rosario', 'telefono' => '0341 - 4821771/72 - interno 135' , 'fax' => '0341 - 4821771/72 - interno 180' , 'cp' => '2000', 'email' => 'administracion@roscytec.org.ar - provincia@rosytec.org.ar' , 'habilitado' => 0),
array('nombre' => 'UNIVERSIDAD NACIONAL DEL LITORAL' , 'domicilio' => 'Pasaje Martinez 2626', 'localidad' => 'Santa Fe', 'telefono' => '0342 - 4551211/22' , 'fax' => '0342 - 4551211/22' , 'cp' =>'3000' , 'email' => 'cetriuvt@unl.edu.ar / cetri@unl.edu.ar' , 'habilitado' => 0),
array('nombre' => 'FUNDACION CIDETER' , 'domicilio' => 'Juan Manuel de Rosas 115 - Area Industrial Oeste', 'localidad' => 'Las Parejas', 'telefono' => '03471 - 470789 / 472575 / 472889 / 472891', '03471 - 470789 / 472575 / 472889 / 472891' , 'fax' => '03471 - 470789 / 472575 / 472889 / 472891', '03471 - 470789 / 472575 / 472889 / 472891' , 'cp' => '2505' , 'email' => 'mborghi@cideter.com.ar / cvolpato@cideter.com.ar' , 'habilitado' => 0),
array('nombre' => 'FUNDACION PARA EL DESARROLLO REGIONAL' , 'domicilio' => 'Necochea 84 - Piso 1', 'localidad' => 'Rafaela', 'telefono' => '03492 - 501219' , 'fax' => '03492 - 501219' , 'cp' => '2300' , 'email' => 'uvt210@fdr-rafaela.org.ar - info@agencia.org.ar' , 'habilitado' => 0),
array('nombre' => 'FUNDACION FACULTAD DE INGENIERIA ROSARIO' , 'domicilio' => 'Pellegrini 250', 'localidad' => 'Rosario', 'telefono' => '0341-4802623/2630' , 'fax' => '0341 - 4802623' , 'cp' => '2000' , 'email' => 'fundacio@fceia.unr.edu.ar' , 'habilitado' => 0),
array('nombre' => 'FUNDACION UNIVERSIDAD NACIONAL DE ROSARIO' , 'domicilio' => 'Córdoba 1814', 'localidad' => 'Rosario', 'telefono' => '0341 - 4802623' , 'fax' => '0341 - 4802623', 'cp' => '2000' , 'email' => 'fundacion@unr.edu.ar' , 'habilitado' => 0),
array('nombre' => 'PARQUE TECNOLOGICO DEL LITORAL CENTRO S.A.P.E.M.' , 'domicilio' => 'Ruta Nac. 168 – Paraje El Pozo', 'localidad' => 'Santa Fe', 'telefono' => '0342 4511546 / 7 interno 1415' , 'fax' => '0342 4511546 / 7 interno 1421' , 'cp' => '3000', 'email' => 'secretaria@ptlc.org.ar; administracion@ptlc.org.ar' , 'habilitado' => 0),
array('nombre' => 'FACULTAD REGIONAL SANTA FE - UTN' , 'domicilio' => 'Lavaisse 610', 'localidad' => 'Santa Fe', 'telefono' => '0342 - 4601579 int 1446 / 0342 - 155420468' , 'fax' => '' , 'cp' => '3000', 'email' => 'avt@frsf.utn.edu.ar' , 'habilitado' => 0),
array('nombre' => 'FUNDACION PARA LA PROMOCION Y DESARROLLO TECNOLOGICO DEL LITORAL' , 'domicilio' => 'Güemez 3450', 'localidad' => 'Santa Fe', 'telefono' => '4564414' , 'fax' => '4564414' , 'cp' => '3000' , 'email' => 'adrianab@ceride.gov.ar / vintec@vintec.org.ar' , 'habilitado' => 0),
array('nombre' => 'FACULTAD REGIONAL RAFAELA - UTN' , 'domicilio' => 'Acuña 49', 'localidad' => 'Rafaela', 'telefono' => '03492 - 432710 / 422880\n03492-15639904' , 'fax' => '' , 'cp' => '2300' , 'email' => 'uvt@frra.utn.edu.ar/ victor.cogno@frra.utn.edu.ar' , 'habilitado' => 0),
array('nombre' => 'FUNDACION UNIDAD ACADEMICA RECONQUISTA-UTN' , 'domicilio' => 'Calle 44 Nº1000 Parque industrial', 'localidad' => 'Reconquista', 'telefono' => '03482 - 420048\n03482-15538399' , 'fax' => '03482 - 420048' , 'cp' => '3560' , 'email' => 'academica@frrq.utn.edu.ar, administrativa@frrq.utn.edu.ar' , 'habilitado' => 0),
array('nombre' => 'FUNDACION ARCIEN PARA EL ARTE LA EDUCACION LA CIENCIA Y LA TECNOLOGIA' , 'domicilio' => 'Avellaneda 3657', 'localidad' => 'Santa Fe', 'telefono' => '0342 - 4534451 / 4535558' , 'fax' => '0342 - 4553439' , 'cp' => '3000' , 'email' => 'fundarcien@ceride.gov.ar, cgs@santafe-conicet.gov.ar' , 'habilitado' => 0),
array('nombre' =>'GRUPO POLO TECNOLOGICO ROSARIO', 'domicilio' => 'Maipú 835 2º Piso', 'localidad' => 'Rosario', 'telefono' => '0341 - 5302070', 'fax' => '0341 - 5302070', 'cp' => '2000', 'email' => 'administración@polotecnologico.net',  'habilitado' => 0),
array('nombre' =>'FUNDACION FACULTAD REGIONAL SANTA FE', 'domicilio' => 'Lavaisse 610', 'localidad' => 'Santa Fe', 'telefono' => '0342 - 4601579 int 1446 / 0342 - 155420468', 'fax' => '', 'cp' =>'3000', 'email' => 'avt@frsf.utn.edu.ar',  'habilitado' => 0),
array('nombre' =>'FUNDACION DEL INSTITUTO DE BIOLOGÍA MOLECULAR Y CELULAR DE ROSARIO', 'domicilio' => '27 de Febrero 210 bis (Ocampo y Esmeralda)', 'localidad' => 'Rosario', 'telefono' => '0341 - 4237070', 'fax' => '0341 - 4237070', 'cp' =>'2000', 'email' => 'administracion@fundacionibr.org.ar, fundacion@fundacionibr.org.ar',  'habilitado' => 0),
array('nombre' =>'FUNDACION CIENCIAS AGRARIAS', 'domicilio' => 'Campo Experimental Villarino CC Nº 14', 'localidad' => 'Zavalla', 'telefono' => '0341 - 4970080 - interno 1103', 'fax' => '0341 - 4970080 - interno 1103', 'cp' =>'2125', 'email' => 'fundacion@cienciasagrarias.org.ar / famelong@arnet.com.ar',  'habilitado' => 0),
array('nombre' =>'FUNDACION ARGENINTA', 'domicilio' => 'Francia 459', 'localidad' => 'Rafaela', 'telefono' => '03492 - 506748', 'fax' => '03492 - 420748', 'cp' =>'2300', 'email' => 'lgomez@rafaela.inta.gov.ar',  'habilitado' => 0),
array('nombre' =>'UNIVERSIDAD NACIONAL DE ROSARIO', 'domicilio' => 'Dorrego 1881', 'localidad' => 'Rosario', 'telefono' => '0341 - 4201200', 'fax' => '0341 - 4201200', 'cp' =>'2000', 'email' => 'vinculaciontec@unr.edu.ar',  'habilitado' => 0),
array('nombre' => 'FACULTAD REGIONAL ROSARIO-UTN', 'domicilio' => 'Estanislao Zeballos 1341', 'localidad' => 'Rosario', 'telefono' => '0341 - 4480102 / 4480148 / 4482404', 'fax' => '', 'cp' =>'2000', 'email' => 'decano@frro.utn.edu.ar, seu@frro.utn.edu.ar',  'habilitado' => 0),
array('nombre' => 'FUNDACIÓN BOLSA DE COMERCIO DE SANTA FE', 'domicilio' => 'San Martín 2231', 'localidad' => 'Santa Fe', 'telefono' => '0342 4554734', 'fax' => '0342 4554734', 'cp' =>'3000', 'email' => 'secretaria@bcsf.com.ar',  'habilitado' => 0),
array('nombre' => 'ASOCIACION COOPERADORA FACULTAD DE CIENCIAS ECONOMICAS Y ESTADISTICA DE LA UNIVERSIDAD NACIONAL DE ROSARIO', 'domicilio' => 'Bv. Oroño 1261', 'localidad' => 'Rosario', 'telefono' => '0341 - 4802798 int. 162', 'fax' => '0341 - 4802795', 'cp' =>'2000', 'email' => 'asociacioncooperadora@fcecon.unr.edu.ar', 'habilitado' =>  0),
array('nombre' => 'EMPRESA DE VINCULACION TECNOLOGICA S.R.L.', 'domicilio' => 'Dorrego 1686 1 a', 'localidad' => 'Rosario', 'telefono' => '0341 - 4264624', 'fax' => '', 'cp' =>'2000', 'email' => 'f.cereseto@evtsrl.com.ar',  'habilitado' => 0),
array('nombre' => 'ASOCIACION PARA EL DESARROLLO REGIONAL DE CERES Y HERSILIA', 'domicilio' => 'Av. Mitre 41', 'localidad' => 'Ceres', 'telefono' => '03491 - 422011 / 421795', 'fax' => '03491 - 422011', 'cp' =>'2340', 'email' => 'apdr@interceres.com.ar',  'habilitado' => 0),
array('nombre' => 'FUNDACION FUNDALyF', 'domicilio' => 'Suipacha 2934', 'localidad' => 'Santa Fe', 'telefono' =>'4565200 / 4520074/75 Int. 861', 'fax' => '', 'cp' => '3000', 'email' => 'fundalyf@yahoo.com.ar',  'habilitado' => 0),
array('nombre' => 'CENTRO REGIONAL DE ASISTENCIA A LA PRODUCCION', 'domicilio' => 'Dorrego 1347 3º A', 'localidad' => 'Rosario', 'telefono' => '0341 - 4488788', 'fax' => '0341 - 4488788', 'cp' => '2000', 'email' => 'crap@crap.org.ar',  'habilitado' => 0),
array('nombre' => 'ACIFIR - FUNDACION PARA EL APOYO DE LAS CIENCIAS FISICAS', 'domicilio' => 'Esmeralda y Ocampo', 'localidad' => 'Rosario', 'telefono' => '0341 - 4853222 int. 402', 'fax' => '0341 - 4853222 ', 'cp' => '2000', 'email' => 'stachiotti@ifir-conicet.gov.ar',  'habilitado' => 0),
array('nombre' => 'FUNDACION FRAY BARTOLOME DE LAS CASAS', 'domicilio' => 'Italia 353 Planta 2º', 'localidad' => 'Rosario', 'telefono' => '0341 - 4256790', 'fax' => '341 -4250218', 'cp' => '2000', 'email' => 'adriandimaria@gmail.com / sergiomiotti@yahoo.com.ar',  'habilitado' => 0),
array('nombre' => 'ASOCIACION COOPERADORA DE LA FACULTAD DE CIENCIAS BIOQUIMICAS DE LA UNR', 'domicilio' => 'Suipacha 531', 'localidad' => 'Rosario',  'telefono' => '0341-480-4595 int. 267', 'fax' => '', 'cp' => '2000', 'email' => 'cooperadora@fbioyf.unr.edu.ar',  'habilitado' => 0),
array('nombre' => 'CENTRO DE INGENIEROS DE ROSARIO', 'domicilio' => 'Laprida 935', 'localidad' => 'Rosario', 'telefono' => '0341 - 4472464', 'fax' => '0341 - 4472464', 'cp' => '2000', 'email' => 'cirosario@live.com',  'habilitado' => 0),
array('nombre' => 'FACULTAD REGIONAL VENADO TUERTO-UTN', 'domicilio' => 'Castelli 641', 'localidad' => 'Venado Tuerto', 'telefono' => '03462 - 431013', 'fax' => '', 'cp' => '2600', 'email' => 'uvt@frvt.utn.edu.ar',  'habilitado' => 0),
array('nombre' => 'INTA DELEGACION RAFAELA', 'domicilio' => 'AV. Mitre 1382', 'localidad' => 'Rafaela', 'telefono' => '03492 - 506748', 'fax' => '03492 - 506748', 'cp' => '2300', 'email' => 'gomez.lucas@inta.gov.ar',  'habilitado' => 0),
array('nombre' => 'UNIVERSIDAD AUSTRAL', 'domicilio' => 'Paraguay 1950', 'localidad' => 'Rosario', 'telefono' => '0341 - 5223000', 'fax' => '0341 - 5223001', 'cp' => '2000', 'email' => 'lgarcia@austral.edu.ar/ calegreaustral.edu.ar',  'habilitado' => 0),
array('nombre' => 'UNIVERSIDAD CATOLICA DE SANTA FE ', 'domicilio' => 'Echagüe 7151', 'localidad' => 'Santa Fe', 'telefono' => '0342-4603030', 'fax' => '0342-4603030 int. 135', 'cp' => '3000', 'email' => 'gmancini@ucsf.edu.ar',  'habilitado' => 0),
array('nombre' => 'FUNDACION INSTITUTO TECNOLOGICO EL MOLINO', 'domicilio' => 'Rivadavia 1390 – 1º Piso ', 'localidad' => 'Esperanza', 'telefono' => '03496 - 426593 int. 113', 'fax' => '03496 - 426593', 'cp' => '3080', 'email' => 'nillescas@itec-elmolino.edu.ar',  'habilitado' => 0),

);
	
		
		foreach ($uvt as $u){
			$entidad=new UVT();
			$entidad->SetNombre($u['nombre']);
			$entidad->SetLocalidad($u['localidad']);
			$entidad->SetDomicilio($u['domicilio']);
			$entidad->SetTelefono($u['telefono']);
			$entidad->SetFax($u['fax']);
			$entidad->SetCp($u['cp']);
			$entidad->SetEmail($u['email']);
			$entidad->SetHabilitado($u['habilitado']);

			$manager->persist($entidad);
		}
		
		$manager->flush();
	}
}
