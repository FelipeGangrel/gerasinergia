<?php 

namespace App\Entities\Traits;

use Datetime;
use Doctrine\ORM\Mapping as ORM;

trait DeletableTrait
{
    /**
     * @ORM\Column(type="datetime", name="deletado_em", nullable=true)
     * @var Datetime
     */
    protected $deletadoEm;
    
    /**
     * @return $deletadoEm
     */
    public function getDeletadoEm()
    {
        return $this->deletadoEm;
    }

}