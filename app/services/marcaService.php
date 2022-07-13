<?php

namespace App\Services;

use App\Interfaces\IMarcaService;
use App\Models\MarcaModel;
use Libs\Database;

class MarcaService implements IMarcaService
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
        $result = MarcaModel::select('IdMarca', 'Nombre')->get();
        return $result;
    }

}
