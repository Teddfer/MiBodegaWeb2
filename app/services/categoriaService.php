<?php

namespace App\Services;

use App\Models\CategoriaModel;
use Libs\Database;

class CategoriaService
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $result = CategoriaModel::all();
        return $result;
    }
}
