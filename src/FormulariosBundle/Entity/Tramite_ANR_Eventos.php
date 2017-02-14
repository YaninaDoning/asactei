<?php

namespace FormulariosBundle\Entity;

class Tramite_ANR_Eventos extends Tramite {

    private $nombre_evento;
    private $beneficiario;
    private $uvt_representante;
    private $director;
    private $responsable;
    private $descripcion;
    private $fecha_desde;
    private $fecha_hasta;
    private $costo_inscripcion;
    private $presupuesto_obs_traslado;    
    private $presupuesto_obs_material;
    private $presupuesto_obs_servicios;
    private $presupuesto_obs_honorarios;
    private $presupuesto_obs_uvt;
    private $presupuesto_total;
    private $otros_subsidios;
    private $otro_subsidio_asactei;


    /**
     * Set nombreEvento
     *
     * @param string $nombreEvento
     *
     * @return Tramite_ANR_Eventos
     */
    public function setNombreEvento($nombreEvento)
    {
        $this->nombre_evento = $nombreEvento;

        return $this;
    }

    /**
     * Get nombreEvento
     *
     * @return string
     */
    public function getNombreEvento()
    {
        return $this->nombre_evento;
    }

    /**
     * Set otrosSubsidios
     *
     * @param boolean $otrosSubsidios
     *
     * @return Tramite_ANR_Eventos
     */
    public function setOtrosSubsidios($otrosSubsidios)
    {
        $this->otros_subsidios = $otrosSubsidios;

        return $this;
    }

    /**
     * Get otrosSubsidios
     *
     * @return boolean
     */
    public function getOtrosSubsidios()
    {
        return $this->otros_subsidios;
    }

    /**
     * Set otroSubsidioAsactei
     *
     * @param boolean $otroSubsidioAsactei
     *
     * @return Tramite_ANR_Eventos
     */
    public function setOtroSubsidioAsactei($otroSubsidioAsactei)
    {
        $this->otro_subsidio_asactei = $otroSubsidioAsactei;

        return $this;
    }

    /**
     * Get otroSubsidioAsactei
     *
     * @return boolean
     */
    public function getOtroSubsidioAsactei()
    {
        return $this->otro_subsidio_asactei;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Tramite_ANR_Eventos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set costoInscripcion
     *
     * @param float $costoInscripcion
     *
     * @return Tramite_ANR_Eventos
     */
    public function setCostoInscripcion($costoInscripcion)
    {
        $this->costo_inscripcion = $costoInscripcion;

        return $this;
    }

    /**
     * Get costoInscripcion
     *
     * @return float
     */
    public function getCostoInscripcion()
    {
        return $this->costo_inscripcion;
    }

    /**
     * Set presupuestoTotal
     *
     * @param float $presupuestoTotal
     *
     * @return Tramite_ANR_Eventos
     */
    public function setPresupuestoTotal($presupuestoTotal)
    {
        $this->presupuesto_total = $presupuestoTotal;

        return $this;
    }

    /**
     * Get presupuestoTotal
     *
     * @return float
     */
    public function getPresupuestoTotal()
    {
        return $this->presupuesto_total;
    }

    /**
     * Set presupuestoObsTraslado
     *
     * @param string $presupuestoObsTraslado
     *
     * @return Tramite_ANR_Eventos
     */
    public function setPresupuestoObsTraslado($presupuestoObsTraslado)
    {
        $this->presupuesto_obs_traslado = $presupuestoObsTraslado;

        return $this;
    }

    /**
     * Get presupuestoObsTraslado
     *
     * @return string
     */
    public function getPresupuestoObsTraslado()
    {
        return $this->presupuesto_obs_traslado;
    }

    /**
     * Set presupuestoObsMaterial
     *
     * @param string $presupuestoObsMaterial
     *
     * @return Tramite_ANR_Eventos
     */
    public function setPresupuestoObsMaterial($presupuestoObsMaterial)
    {
        $this->presupuesto_obs_material = $presupuestoObsMaterial;

        return $this;
    }

    /**
     * Get presupuestoObsMaterial
     *
     * @return string
     */
    public function getPresupuestoObsMaterial()
    {
        return $this->presupuesto_obs_material;
    }

    /**
     * Set presupuestoObsServicios
     *
     * @param string $presupuestoObsServicios
     *
     * @return Tramite_ANR_Eventos
     */
    public function setPresupuestoObsServicios($presupuestoObsServicios)
    {
        $this->presupuesto_obs_servicios = $presupuestoObsServicios;

        return $this;
    }

    /**
     * Get presupuestoObsServicios
     *
     * @return string
     */
    public function getPresupuestoObsServicios()
    {
        return $this->presupuesto_obs_servicios;
    }

    /**
     * Set presupuestoObsHonorarios
     *
     * @param string $presupuestoObsHonorarios
     *
     * @return Tramite_ANR_Eventos
     */
    public function setPresupuestoObsHonorarios($presupuestoObsHonorarios)
    {
        $this->presupuesto_obs_honorarios = $presupuestoObsHonorarios;

        return $this;
    }

    /**
     * Get presupuestoObsHonorarios
     *
     * @return string
     */
    public function getPresupuestoObsHonorarios()
    {
        return $this->presupuesto_obs_honorarios;
    }

    /**
     * Set presupuestoObsUvt
     *
     * @param string $presupuestoObsUvt
     *
     * @return Tramite_ANR_Eventos
     */
    public function setPresupuestoObsUvt($presupuestoObsUvt)
    {
        $this->presupuesto_obs_uvt = $presupuestoObsUvt;

        return $this;
    }

    /**
     * Get presupuestoObsUvt
     *
     * @return string
     */
    public function getPresupuestoObsUvt()
    {
        return $this->presupuesto_obs_uvt;
    }

    /**
     * Set fechaDesde
     *
     * @param \DateTime $fechaDesde
     *
     * @return Tramite_ANR_Eventos
     */
    public function setFechaDesde($fechaDesde)
    {
        $this->fecha_desde = $fechaDesde;

        return $this;
    }

    /**
     * Get fechaDesde
     *
     * @return \DateTime
     */
    public function getFechaDesde()
    {
        return $this->fecha_desde;
    }

    /**
     * Set fechaHasta
     *
     * @param \DateTime $fechaHasta
     *
     * @return Tramite_ANR_Eventos
     */
    public function setFechaHasta($fechaHasta)
    {
        $this->fecha_hasta = $fechaHasta;

        return $this;
    }

    /**
     * Get fechaHasta
     *
     * @return \DateTime
     */
    public function getFechaHasta()
    {
        return $this->fecha_hasta;
    }

    /**
     * Set beneficiario
     *
     * @param \FormulariosBundle\Entity\Institucion $beneficiario
     *
     * @return Tramite_ANR_Eventos
     */
    public function setBeneficiario(\FormulariosBundle\Entity\Institucion $beneficiario = null)
    {
        $this->beneficiario = $beneficiario;

        return $this;
    }

    /**
     * Get beneficiario
     *
     * @return \FormulariosBundle\Entity\Institucion
     */
    public function getBeneficiario()
    {
        return $this->beneficiario;
    }

    /**
     * Set uvtRepresentante
     *
     * @param \FormulariosBundle\Entity\Representante_UVT $uvtRepresentante
     *
     * @return Tramite_ANR_Eventos
     */
    public function setUvtRepresentante(\FormulariosBundle\Entity\Representante_UVT $uvtRepresentante = null)
    {
        $this->uvt_representante = $uvtRepresentante;

        return $this;
    }

    /**
     * Get uvtRepresentante
     *
     * @return \FormulariosBundle\Entity\Representante_UVT
     */
    public function getUvtRepresentante()
    {
        return $this->uvt_representante;
    }

    /**
     * Set director
     *
     * @param \FormulariosBundle\Entity\Persona $director
     *
     * @return Tramite_ANR_Eventos
     */
    public function setDirector(\FormulariosBundle\Entity\Persona $director = null)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return \FormulariosBundle\Entity\Persona
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set responsable
     *
     * @param \FormulariosBundle\Entity\Persona $responsable
     *
     * @return Tramite_ANR_Eventos
     */
    public function setResponsable(\FormulariosBundle\Entity\Persona $responsable = null)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \FormulariosBundle\Entity\Persona
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
}
