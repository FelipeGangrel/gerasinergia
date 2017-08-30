<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use LaravelDoctrine\ORM\Notifications\Notifiable;

use App\Entities\Traits\AuthenticatableTrait;
use App\Entities\Traits\CanResetPasswordTrait;
use App\Entities\Traits\TimestampsTrait;
use App\Entities\Traits\DeletableTrait;
use App\Entities\Traits\VersionTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios")
 * @Gedmo\SoftDeleteable(fieldName="deletadoEm", timeAware=false)
 */
class Usuario implements AuthenticatableContract, CanResetPasswordContract
{

    use AuthenticatableTrait, CanResetPasswordTrait, TimestampsTrait, DeletableTrait, VersionTrait, Notifiable;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @var string
     * @ORM\Column(type="string",nullable=false)
     */
    protected $nome;

    /**
     * @var string
     * @ORM\Column(type="string",nullable=false,unique=true)
     */
    protected $login;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function fields(){
        return ['nome','email','password'];
    }

}