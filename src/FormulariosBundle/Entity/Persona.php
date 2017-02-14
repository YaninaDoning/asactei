<?php

namespace FormulariosBundle\Entity;

class Persona
{
    private $id;
    private $nombre;
    private $cargo;
    private $email;
    private $telefono;
    private $movil;
    private $cuit;
    private $direccion;
    private $cp;
    private $institucion;
    private $titulo;
    private $funcion;
    private $horas_dedicadas;
    private $tramite_integrante;
    private $localidad;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Persona
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
     * Set cargo
     *
     * @param string $cargo
     * @return Persona
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Persona
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
     * Set telefono
     *
     * @param string $telefono
     * @return Persona
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
     * Set movil
     *
     * @param string $movil
     * @return Persona
     */
    public function setMovil($movil)
    {
        $this->movil = $movil;

        return $this;
    }

    /**
     * Get movil
     *
     * @return string 
     */
    public function getMovil()
    {
        return $this->movil;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     * @return Persona
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
     * Set direccion
     *
     * @param string $direccion
     * @return Persona
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Persona
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
     * Set institucion
     *
     * @param string $institucion
     * @return Persona
     */
    public function setInstitucion($institucion)
    {
        $this->institucion = $institucion;

        return $this;
    }

    /**
     * Get institucion
     *
     * @return string 
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Persona
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set funcion
     *
     * @param string $funcion
     * @return Persona
     */
    public function setFuncion($funcion)
    {
        $this->funcion = $funcion;

        return $this;
    }

    /**
     * Get funcion
     *
     * @return string 
     */
    public function getFuncion()
    {
        return $this->funcion;
    }

    /**
     * Set horas_dedicadas
     *
     * @param string $horasDedicadas
     * @return Persona
     */
    public function setHorasDedicadas($horasDedicadas)
    {
        $this->horas_dedicadas = $horasDedicadas;

        return $this;
    }

    /**
     * Get horas_dedicadas
     *
     * @return string 
     */
    public function getHorasDedicadas()
    {
        return $this->horas_dedicadas;
    }

    /**
     * Set localidad
     *
     * @param \FormulariosBundle\Entity\Localidad $localidad
     *
     * @return Persona
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
     * Set tramiteIntegrante
     *
     * @param \FormulariosBundle\Entity\Tramite $tramiteIntegrante
     *
     * @return Persona
     */
    public function setTramiteIntegrante(\FormulariosBundle\Entity\Tramite $tramiteIntegrante = null)
    {
        $this->tramite_integrante = $tramiteIntegrante;

        return $this;
    }

    /**
     * Get tramiteIntegrante
     *
     * @return \FormulariosBundle\Entity\Tramite
     */
    public function getTramiteIntegrante()
    {
        return $this->tramite_integrante;
    }
}
