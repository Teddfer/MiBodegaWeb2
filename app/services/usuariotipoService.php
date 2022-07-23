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

    public function getAllSimple()
    {
        $result = UsuarioTipoModel::select('IdTipo', 'Nombre')
        ->orderByDesc('usuarios_tipo.IdTipo')
        ->get();
        return $result;
    }

    public function get(int $id)
    {
        $model = UsuarioTipoModel::find($id);
        if ($model == null) {
            $model = new UsuarioTipoModel();
        }

        return $model;
    }

    public function insert($obj)
    {
        $model = new UsuarioTipoModel();
        $model->IdTipo = $obj->IdTipo;
        $model->Nombre = $obj->Nombre;
        return $model->save();
    }

    public function update($obj)
    {
        $model = UsuarioTipoModel::find($obj->IdTipo);
        $model->IdTipo = $obj->IdTipo;
        $model->Nombre = $obj->Nombre;
        return $model->save();
    }

    public function delete(int $id)
    {
        $model = UsuarioTipoModel::find($id);
        return $model->delete();
    }
}
