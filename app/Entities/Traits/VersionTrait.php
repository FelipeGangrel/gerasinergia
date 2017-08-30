<?php

namespace App\Entities\Traits;

use Doctrine\ORM\Mapping as ORM;

trait VersionTrait
{
  /**
   * @ORM\Column(type="integer")
   * @ORM\Version
   */
  protected $version;

}