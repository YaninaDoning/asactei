<?php

namespace FormulariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;

class Usuario implements UserInterface{

    public $id;
    public $creado;
    public $apellido;
    public $nombre;
    public $organizacion;
    public $email;
    public $password;
    public $hash;
    public $habilitado;
    public $salt;
    public $telefono;
    public $ultimo_login;
    public $tramites;
    public $roles;

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
     * @return Usuario
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
     * Set apellido
     *
     * @param string $apellido
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * Set organizacion
     *
     * @param string $organizacion
     * @return Usuario
     */
    public function setOrganizacion($organizacion)
    {
        $this->organizacion = $organizacion;

        return $this;
    }

    /**
     * Get organizacion
     *
     * @return string 
     */
    public function getOrganizacion()
    {
        return $this->organizacion;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
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
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set hash
     *
     * @param string $hash
     * @return Usuario
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set habilitado
     *
     * @param boolean $habilitado
     * @return Usuario
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
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Usuario
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
     * Set ultimo_login
     *
     * @param \DateTime $ultimoLogin
     * @return Usuario
     */
    public function setUltimoLogin($ultimoLogin)
    {
        $this->ultimo_login = $ultimoLogin;

        return $this;
    }

    /**
     * Get ultimo_login
     *
     * @return \DateTime 
     */
    public function getUltimoLogin()
    {
        return $this->ultimo_login;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tramites = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tramite
     *
     * @param \FormulariosBundle\Entity\Tramite $tramite
     *
     * @return Usuario
     */
    public function addTramite(\FormulariosBundle\Entity\Tramite $tramite)
    {
        $this->tramites[] = $tramite;

        return $this;
    }

    /**
     * Remove tramite
     *
     * @param \FormulariosBundle\Entity\Tramite $tramite
     */
    public function removeTramite(\FormulariosBundle\Entity\Tramite $tramite)
    {
        $this->tramites->removeElement($tramite);
    }

    /**
     * Get tramites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTramites()
    {
        return $this->tramites;
    }




    /**
     * Set roles
     *
     * @param integer $roles
     *
     * @return Usuario
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return integer
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }
     
    public function getUsername()
    {
   	return $this->email;
    }

    public function getSalt()
    {
    	return null;
    }

    public function eraseCredentials(){
    }

}
