<?php

namespace FormulariosBundle\Entity;

class Localidad
{
    const ID_SANTA_FE = 304;
    
    private $id;
    private $nombre;
    private $departamento;
    private $departamento_vid;
    private $localidad_vid;
    private $region;
    private $institucion;
    private $personas;


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
     * @return Localidad
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
     * Set departamento
     *
     * @param string $departamento
     * @return Localidad
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set departamento_vid
     *
     * @param integer $departamentoVid
     * @return Localidad
     */
    public function setDepartamentoVid($departamentoVid)
    {
        $this->departamento_vid = $departamentoVid;

        return $this;
    }

    /**
     * Get departamento_vid
     *
     * @return integer 
     */
    public function getDepartamentoVid()
    {
        return $this->departamento_vid;
    }

    /**
     * Set localidad_vid
     *
     * @param integer $localidadVid
     * @return Localidad
     */
    public function setLocalidadVid($localidadVid)
    {
        $this->localidad_vid = $localidadVid;

        return $this;
    }

    /**
     * Get localidad_vid
     *
     * @return integer 
     */
    public function getLocalidadVid()
    {
        return $this->localidad_vid;
    }

    /**
     * Set region
     *
     * @param integer $region
     * @return Localidad
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return integer 
     */
    public function getRegion()
    {
        return $this->region;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->institucion = new \Doctrine\Common\Collections\ArrayCollection();
        $this->personas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add institucion
     *
     * @param \FormulariosBundle\Entity\Institucion $institucion
     *
     * @return Localidad
     */
    public function addInstitucion(\FormulariosBundle\Entity\Institucion $institucion)
    {
        $this->institucion[] = $institucion;

        return $this;
    }

    /**
     * Remove institucion
     *
     * @param \FormulariosBundle\Entity\Institucion $institucion
     */
    public function removeInstitucion(\FormulariosBundle\Entity\Institucion $institucion)
    {
        $this->institucion->removeElement($institucion);
    }

    /**
     * Get institucion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Add persona
     *
     * @param \FormulariosBundle\Entity\Persona $persona
     *
     * @return Localidad
     */
    public function addPersona(\FormulariosBundle\Entity\Persona $persona)
    {
        $this->personas[] = $persona;

        return $this;
    }

    /**
     * Remove persona
     *
     * @param \FormulariosBundle\Entity\Persona $persona
     */
    public function removePersona(\FormulariosBundle\Entity\Persona $persona)
    {
        $this->personas->removeElement($persona);
    }

    /**
     * Get personas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonas()
    {
        return $this->personas;
    }
}
