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

    public function getAllSimple()
    {
        $result = MarcaModel::select(
            'IdMarca', 'Nombre','Descripcion'
            )
        ->orderByDesc('marcas.IdMarca')
        ->get();
        
        return $result;
    }
    
    public function get(int $id)
    {
        $model = MarcaModel::find($id);
        if ($model == null) {
            $model = new MarcaModel();
        }

        return $model;
    }

    public function insert($obj)
    {
        $model = new MarcaModel();
        $model->IdMarca = $obj->IdMarca;
        $model->Nombre = $obj->Nombre;
        $model->Descripcion = $obj->Descripcion;
        return $model->save();
    }

    public function update($obj)
    {
        $model = MarcaModel::find($obj->IdMarca);
        $model->IdMarca = $obj->IdMarca;
        $model->Nombre = $obj->Nombre;
        $model->Descripcion = $obj->Descripcion;
        return $model->save();
    }

    public function delete(int $id)
    {
        $model = MarcaModel::find($id);
        return $model->delete();
    }

}
