<?php

namespace FormulariosBundle\Entity;

class Institucion {

    private $id;
    private $cuit;
    private $nombre;
    private $domicilio;
    private $domicilio_legal;
    private $cp;
    private $telefono;
    private $responsable;
    private $email;
    private $fecha_constitucion;
    private $fecha_inicio_actividades;
    private $facturacion_ultimo_ejercicio;
    private $representante_nombre;
    private $representante_cuit;
    private $representante_domicilio;
    private $representante_email;
    private $representante_cargo;
    private $representante_telefono;
    private $apoderado_nombre;
    private $apoderado_cuit;
    private $localidad;
    private $tramite;
    private $tramite_presta_servicio;
    private $tramite_otras;
    private $domicilio_legal_localidad_id;
    private $domicilio_legal_cp;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     * @return Institucion
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string 
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Institucion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     * @return Institucion
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string 
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set domicilio_legal
     *
     * @param string $domicilioLegal
     * @return Institucion
     */
    public function setDomicilioLegal($domicilioLegal)
    {
        $this->domicilio_legal = $domicilioLegal;

        return $this;
    }

    /**
     * Get domicilio_legal
     *
     * @return string 
     */
    public function getDomicilioLegal()
    {
        return $this->domicilio_legal;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Institucion
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Institucion
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return Institucion
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Institucion
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fecha_constitucion
     *
     * @param \DateTime $fechaConstitucion
     * @return Institucion
     */
    public function setFechaConstitucion($fechaConstitucion)
    {
        $this->fecha_constitucion = $fechaConstitucion;

        return $this;
    }

    /**
     * Get fecha_constitucion
     *
     * @return \DateTime 
     */
    public function getFechaConstitucion()
    {
        return $this->fecha_constitucion;
    }

    /**
     * Set fecha_inicio_actividades
     *
     * @param \DateTime $fechaInicioActividades
     * @return Institucion
     */
    public function setFechaInicioActividades($fechaInicioActividades)
    {
        $this->fecha_inicio_actividades = $fechaInicioActividades;

        return $this;
    }

    /**
     * Get fecha_inicio_actividades
     *
     * @return \DateTime 
     */
    public function getFechaInicioActividades()
    {
        return $this->fecha_inicio_actividades;
    }

    /**
     * Set facturacion_ultimo_ejercicio
     *
     * @param float $facturacionUltimoEjercicio
     * @return Institucion
     */
    public function setFacturacionUltimoEjercicio($facturacionUltimoEjercicio)
    {
        $this->facturacion_ultimo_ejercicio = $facturacionUltimoEjercicio;

        return $this;
    }

    /**
     * Get facturacion_ultimo_ejercicio
     *
     * @return float 
     */
    public function getFacturacionUltimoEjercicio()
    {
        return $this->facturacion_ultimo_ejercicio;
    }

    /**
     * Set representante_nombre
     *
     * @param string $representanteNombre
     * @return Institucion
     */
    public function setRepresentanteNombre($representanteNombre)
    {
        $this->representante_nombre = $representanteNombre;

        return $this;
    }

    /**
     * Get representante_nombre
     *
     * @return string 
     */
    public function getRepresentanteNombre()
    {
        return $this->representante_nombre;
    }

    /**
     * Set representante_cuit
     *
     * @param string $representanteCuit
     * @return Institucion
     */
    public function setRepresentanteCuit($representanteCuit)
    {
        $this->representante_cuit = $representanteCuit;

        return $this;
    }

    /**
     * Get representante_cuit
     *
     * @return string 
     */
    public function getRepresentanteCuit()
    {
        return $this->representante_cuit;
    }

    /**
     * Set representante_domicilio
     *
     * @param string $representanteDomicilio
     * @return Institucion
     */
    public function setRepresentanteDomicilio($representanteDomicilio)
    {
        $this->representante_domicilio = $representanteDomicilio;

        return $this;
    }

    /**
     * Get representante_domicilio
     *
     * @return string 
     */
    public function getRepresentanteDomicilio()
    {
        return $this->representante_domicilio;
    }

    /**
     * Set representante_email
     *
     * @param string $representanteEmail
     * @return Institucion
     */
    public function setRepresentanteEmail($representanteEmail)
    {
        $this->representante_email = $representanteEmail;

        return $this;
    }

    /**
     * Get representante_email
     *
     * @return string 
     */
    public function getRepresentanteEmail()
    {
        return $this->representante_email;
    }

    /**
     * Set representante_cargo
     *
     * @param string $representanteCargo
     * @return Institucion
     */
    public function setRepresentanteCargo($representanteCargo)
    {
        $this->representante_cargo = $representanteCargo;

        return $this;
    }

    /**
     * Get representante_cargo
     *
     * @return string 
     */
    public function getRepresentanteCargo()
    {
        return $this->representante_cargo;
    }

    /**
     * Set representante_telefono
     *
     * @param string $representanteTelefono
     * @return Institucion
     */
    public function setRepresentanteTelefono($representanteTelefono)
    {
        $this->representante_telefono = $representanteTelefono;

        return $this;
    }

    /**
     * Get representante_telefono
     *
     * @return string 
     */
    public function getRepresentanteTelefono()
    {
        return $this->representante_telefono;
    }

    /**
     * Set apoderado_nombre
     *
     * @param string $apoderadoNombre
     * @return Institucion
     */
    public function setApoderadoNombre($apoderadoNombre)
    {
        $this->apoderado_nombre = $apoderadoNombre;

        return $this;
    }

    /**
     * Get apoderado_nombre
     *
     * @return string 
     */
    public function getApoderadoNombre()
    {
        return $this->apoderado_nombre;
    }

    /**
     * Set apoderado_cuit
     *
     * @param string $apoderadoCuit
     * @return Institucion
     */
    public function setApoderadoCuit($apoderadoCuit)
    {
        $this->apoderado_cuit = $apoderadoCuit;

        return $this;
    }

    /**
     * Get apoderado_cuit
     *
     * @return string 
     */
    public function getApoderadoCuit()
    {
        return $this->apoderado_cuit;
    }

  

    /**
     * Set localidad
     *
     * @param \FormulariosBundle\Entity\Localidad $localidad
     * @return Institucion
     */
    public function setLocalidad(\FormulariosBundle\Entity\Localidad $localidad = null)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return \FormulariosBundle\Entity\Localidad 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set domicilio_legal_localidad_id
     *
     * @param \FormulariosBundle\Entity\Localidad $domicilioLegalLocalidadId
     * @return Institucion
     */
    public function setDomicilioLegalLocalidadId(\FormulariosBundle\Entity\Localidad $domicilioLegalLocalidadId = null)
    {
        $this->domicilio_legal_localidad_id = $domicilioLegalLocalidadId;

        return $this;
    }

    /**
     * Get domicilio_legal_localidad_id
     *
     * @return \FormulariosBundle\Entity\Localidad 
     */
    public function getDomicilioLegalLocalidadId()
    {
        return $this->domicilio_legal_localidad_id;
    }

    /**
     * Set tramite
     *
     * @param \FormulariosBundle\Entity\Tramite $tramite
     * @return Institucion
     */
    public function setTramite(\FormulariosBundle\Entity\Tramite $tramite = null)
    {
        $this->tramite = $tramite;

        return $this;
    }

    /**
     * Get tramite
     *
     * @return \FormulariosBundle\Entity\Tramite 
     */
    public function getTramite()
    {
        return $this->tramite;
    }

    /**
     * Set tramite_presta_servicio
     *
     * @param \FormulariosBundle\Entity\Tramite $tramitePrestaServicio
     * @return Institucion
     */
    public function setTramitePrestaServicio(\FormulariosBundle\Entity\Tramite $tramitePrestaServicio = null)
    {
        $this->tramite_presta_servicio = $tramitePrestaServicio;

        return $this;
    }

    /**
     * Get tramite_presta_servicio
     *
     * @return \FormulariosBundle\Entity\Tramite 
     */
    public function getTramitePrestaServicio()
    {
        return $this->tramite_presta_servicio;
    }

    /**
     * Set tramite_otras
     *
     * @param \FormulariosBundle\Entity\Localidad $tramiteOtras
     * @return Institucion
     */
    public function setTramiteOtras(\FormulariosBundle\Entity\Localidad $tramiteOtras = null)
    {
        $this->tramite_otras = $tramiteOtras;

        return $this;
    }

    /**
     * Get tramite_otras
     *
     * @return \FormulariosBundle\Entity\Localidad 
     */
    public function getTramiteOtras()
    {
        return $this->tramite_otras;
    }
}
