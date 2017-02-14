<?php

namespace FormulariosBundle\Entity;

class Tramite
{
    private $id;
    private $creado;
    private $actualizado;
    private $enviado;
    private $presentado;
    private $estado;
    private $codigo;
    private $instituciones;
    private $usuario;
    private $instituciones_prestatarias;
    private $integrantes;

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
     * Set creado
     *
     * @param \DateTime $creado
     * @return Tramite
     */
    public function setCreado($creado)
    {
        $this->creado = $creado;

        return $this;
    }

    /**
     * Get creado
     *
     * @return \DateTime 
     */
    public function getCreado()
    {
        return $this->creado;
    }

    /**
     * Set actualizado
     *
     * @param \DateTime $actualizado
     * @return Tramite
     */
    public function setActualizado($actualizado)
    {
        $this->actualizado = $actualizado;

        return $this;
    }

    /**
     * Get actualizado
     *
     * @return \DateTime 
     */
    public function getActualizado()
    {
        return $this->actualizado;
    }

    /**
     * Set enviado
     *
     * @param \DateTime $enviado
     * @return Tramite
     */
    public function setEnviado($enviado)
    {
        $this->enviado = $enviado;

        return $this;
    }

    /**
     * Get enviado
     *
     * @return \DateTime 
     */
    public function getEnviado()
    {
        return $this->enviado;
    }

    /**
     * Set presentado
     *
     * @param \DateTime $presentado
     * @return Tramite
     */
    public function setPresentado($presentado)
    {
        $this->presentado = $presentado;

        return $this;
    }

    /**
     * Get presentado
     *
     * @return \DateTime 
     */
    public function getPresentado()
    {
        return $this->presentado;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Tramite
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Tramite
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->instituciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->instituciones_prestatarias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->integrantes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add institucione
     *
     * @param \FormulariosBundle\Entity\Institucion $institucione
     *
     * @return Tramite
     */
    public function addInstitucione(\FormulariosBundle\Entity\Institucion $institucione)
    {
        $this->instituciones[] = $institucione;

        return $this;
    }

    /**
     * Remove institucione
     *
     * @param \FormulariosBundle\Entity\Institucion $institucione
     */
    public function removeInstitucione(\FormulariosBundle\Entity\Institucion $institucione)
    {
        $this->instituciones->removeElement($institucione);
    }

    /**
     * Get instituciones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInstituciones()
    {
        return $this->instituciones;
    }

    /**
     * Add institucionesPrestataria
     *
     * @param \FormulariosBundle\Entity\Institucion $institucionesPrestataria
     *
     * @return Tramite
     */
    public function addInstitucionesPrestataria(\FormulariosBundle\Entity\Institucion $institucionesPrestataria)
    {
        $this->instituciones_prestatarias[] = $institucionesPrestataria;

        return $this;
    }

    /**
     * Remove institucionesPrestataria
     *
     * @param \FormulariosBundle\Entity\Institucion $institucionesPrestataria
     */
    public function removeInstitucionesPrestataria(\FormulariosBundle\Entity\Institucion $institucionesPrestataria)
    {
        $this->instituciones_prestatarias->removeElement($institucionesPrestataria);
    }

    /**
     * Get institucionesPrestatarias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInstitucionesPrestatarias()
    {
        return $this->instituciones_prestatarias;
    }

    /**
     * Add integrante
     *
     * @param \FormulariosBundle\Entity\Persona $integrante
     *
     * @return Tramite
     */
    public function addIntegrante(\FormulariosBundle\Entity\Persona $integrante)
    {
        $this->integrantes[] = $integrante;

        return $this;
    }

    /**
     * Remove integrante
     *
     * @param \FormulariosBundle\Entity\Persona $integrante
     */
    public function removeIntegrante(\FormulariosBundle\Entity\Persona $integrante)
    {
        $this->integrantes->removeElement($integrante);
    }

    /**
     * Get integrantes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIntegrantes()
    {
        return $this->integrantes;
    }

    /**
     * Set usuario
     *
     * @param \FormulariosBundle\Entity\Usuario $usuario
     *
     * @return Tramite
     */
    public function setUsuario(\FormulariosBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \FormulariosBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
