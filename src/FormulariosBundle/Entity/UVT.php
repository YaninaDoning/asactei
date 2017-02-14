<?php

namespace FormulariosBundle\Entity;

class UVT
{
    private $id;
    private $nombre;
    private $domicilio;
    private $localidad;
    private $telefono;
    private $fax;
    private $cp;
    private $email;
    private $habilitado;
    private $representantes;

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
     * @return UVT
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
     * @return UVT
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
     * Set localidad
     *
     * @param string $localidad
     * @return UVT
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return UVT
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
     * Set fax
     *
     * @param string $fax
     * @return UVT
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return UVT
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
     * Set email
     *
     * @param string $email
     * @return UVT
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
     * Set habilitado
     *
     * @param boolean $habilitado
     * @return UVT
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return boolean 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->representantes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add representante
     *
     * @param \FormulariosBundle\Entity\Representante_UVT $representante
     *
     * @return UVT
     */
    public function addRepresentante(\FormulariosBundle\Entity\Representante_UVT $representante)
    {
        $this->representantes[] = $representante;

        return $this;
    }

    /**
     * Remove representante
     *
     * @param \FormulariosBundle\Entity\Representante_UVT $representante
     */
    public function removeRepresentante(\FormulariosBundle\Entity\Representante_UVT $representante)
    {
        $this->representantes->removeElement($representante);
    }

    /**
     * Get representantes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRepresentantes()
    {
        return $this->representantes;
    }
}
