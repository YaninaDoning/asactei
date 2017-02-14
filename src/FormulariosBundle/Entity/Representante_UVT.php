<?php

namespace FormulariosBundle\Entity;

class Representante_UVT extends Persona
{
    private $uvt;

    /**
     * Set uvt
     *
     * @param \FormulariosBundle\Entity\UVT $uvt
     *
     * @return Representante_UVT
     */
    public function setUvt(\FormulariosBundle\Entity\UVT $uvt = null)
    {
        $this->uvt = $uvt;

        return $this;
    }

    /**
     * Get uvt
     *
     * @return \FormulariosBundle\Entity\UVT
     */
    public function getUvt()
    {
        return $this->uvt;
    }
}
