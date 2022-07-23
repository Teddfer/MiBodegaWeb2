<?php

namespace App\Services;

use App\Interfaces\ICategoriaService;
use App\Models\CategoriaModel;
use Libs\Database;

class CategoriaService implements ICategoriaService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAllSimple()
    {
        $result = CategoriaModel::select('IdCategoria','Nombre', 'Descripcion')
        ->orderByDesc('categorias.IdCategoria')
        ->get();
        return $result;
    }

    public function get(int $id)
    {
        $model = CategoriaModel::find($id);
        if ($model == null) {
            $model = new CategoriaModel();
        }

        return $model;
    }

    public function insert($obj)
    {
        $model = new CategoriaModel();
        $model->IdCategoria = $obj->IdCategoria;
        $model->Nombre = $obj->Nombre;
        $model->Descripcion = $obj->Descripcion;
        return $model->save();
    }

    public function update($obj)
    {
        $model = CategoriaModel::find($obj->IdCategoria);
        $model->IdCategoria = $obj->IdCategoria;
        $model->Nombre = $obj->Nombre;
        $model->Descripcion = $obj->Descripcion;
        return $model->save();
    }

    public function delete(int $id)
    {
        $model = CategoriaModel::find($id);
        return $model->delete();
    }
}
