<?php namespace App\Traits\Entities;

use Datetime;
use Doctrine\ORM\Mapping as ORM;

trait DeletableTrait
{

    /**
     * @ORM\Column(type="datetime", name="deleted_at", nullable=true)
     * @var Datetime
     */
    protected $deletedAt;
    
    /**
     * @return $deletedAt
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

}