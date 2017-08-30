<?php 

namespace App\Repositories\Contracts;

interface UsuarioRepositoryContract
{
    public function create(array $data);
    public function prepare($entity, array $data);
    public function update($id, array $data);
    public function save($obj);
    public function delete($obj);
}