<?php

namespace App\Services;

use App\Interfaces\IUsuarioTipoService;
use App\Models\UsuarioTipoModel;
use Libs\Database;

class UsuarioTipoService implements IUsuarioTipoService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
    }

    public function getAllSimple()
    {
        $result = UsuarioTipoModel::select('IdTipo', 'Nombre')->get();
        return $result;
    }

    public function get(int $id)
    {
    }

    public function insert($obj)
    {
    }

    public function update($obj)
    {
    }

    public function delete(int $id)
    {
    }
}
