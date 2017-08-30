<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Repositories\Contracts\UsuarioRepositoryContract;

class UsuarioRepositoryTest extends TestCase
{   

    protected $repository;
    protected static $usuario;

    public function setup()
    {
        parent::setup();
        $this->repository = \App::make(UsuarioRepositoryContract::class);
    }

    public function testCreateAndSave()
    {   
        $data = [
            'nome' => 'foo',
            'email' => 'foo@bol.com.br',
            'password'=> 'testesenhafoo',
        ];
        
        $usuario = $this->repository->create($data);
        self::$usuario = $this->repository->save($usuario);


        $this->assertDatabaseHas('usuarios', [
            'id' => self::$usuario->getId()
        ]);
    }

    public function testUpdateAndSave()
    {   
        $data = [
            'nome' => 'bar',
            'email' => 'bar@bol.com.br',
            'password'=> 'testesenhabar',
        ];

        $usuario = $this->repository->update(self::$usuario->getId(), $data);
        self::$usuario = $this->repository->save($usuario);

        $this->assertEquals($data['nome'],self::$usuario->getNome());
    }

    public function testFindAll()
    {
        $usuarios = $this->repository->findAll();
        $this->assertContainsOnlyInstancesOf(\App\Entities\Usuario::class, $usuarios);
    }

    public function testDelete()
    {
        $usuario = $this->repository->find(self::$usuario->getId());
        $result = $this->repository->delete($usuario);
        $this->assertTrue($result);
    }

}
