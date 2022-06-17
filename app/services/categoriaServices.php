<?php

namespace App\Services;

use App\Interfaces\ICategoriaServices;
use App\Models\CategoriaModel;
use Libs\Database;

class CategoriaServices implements ICategoriaServices
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = CategoriaModel::all();
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
