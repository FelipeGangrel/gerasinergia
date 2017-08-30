<?php

namespace App\Entities\Traits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

trait TimestampsTrait
{
    /**
     * @ORM\Column(name="criado_em", type="datetime", nullable=false)
     * @Gedmo\Timestampable(on="create")
     * @var DateTime
     */
    protected $criadoEm;

    /**
     * @ORM\Column(name="atualizado_em", type="datetime", nullable=false)
     * @Gedmo\Timestampable(on="update")
     * @var DateTime
     */
    protected $atualizadoEm;

    /**
     * @return DateTime
     */
    public function getCriadoEm()
    {
        return $this->criadoEm;
    }

    /**
     * @return DateTime
     */
    public function getAtualizadoEm()
    {
        return $this->atualizadoEm;
    }

    /**
     * @param DateTime $criadoEm
     */
    public function setCriadoEm(DateTime $criadoEm)
    {
        $this->criadoEm = $criadoEm;
    }

    /**
     * @param DateTime $atualizadoEm
     */
    public function setAtualizadoEm(DateTime $atualizadoEm)
    {
        $this->atualizadoEm = $atualizadoEm;
    }
}
