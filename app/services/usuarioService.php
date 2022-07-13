<?php

namespace App\Services;

use App\Interfaces\IUsuarioService;
use App\Models\UsuarioModel;
use Libs\Database;

class UsuarioService implements IUsuarioService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = UsuarioModel::select(
            'usuarios.IdUsuario',
            'usuarios.IdTipo',
            'usuarios.Usuario',
            'usuarios.Clave',
            'usuarios.Correo',
            'usuarios_tipo.Nombre as usuarios_tipo',
        )
            ->join('usuarios_tipo', 'usuarios.IdTipo', '=', 'usuarios_tipo.IdTipo')
            ->get();

        return $result;
    }

    public function get(int $id)
    {
        $model = UsuarioModel::find($id);
        if ($model == null) {
            $model = new UsuarioModel();
        }

        return $model;
    }

    public function insert($obj)
    {
        $model = new UsuarioModel();
        $model->IdUsuario = $obj->IdUsuario;
        $model->IdTipo = $obj->IdTipo;
        $model->Usuario = $obj->Usuario;
        $model->Clave = $obj->Clave;
        $model->Correo = $obj->Correo;
        $model->save();
    }

    public function update($obj)
    {
        $model = UsuarioModel::find($obj->IdUsuario);
        $model->IdUsuario = $obj->IdUsuario;
        $model->IdTipo = $obj->IdTipo;
        $model->Usuario = $obj->Usuario;
        $model->Clave = $obj->Clave;
        $model->Correo = $obj->Correo;
        $model->save();
    }

    public function delete(int $id)
    {
        $model = UsuarioModel::find($id);
        $model->delete();
    }
}
