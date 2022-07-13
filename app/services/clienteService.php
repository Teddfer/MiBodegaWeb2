<?php

namespace App\Services;

use App\Interfaces\IClienteService;
use App\Models\ClienteModel;
use Libs\Database;

class ProductoService implements IClienteService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = ClienteModel::select(
            'clientes.IdCliente',
            'clientes.IdUsuario',
            'clientes.Nombres',
            'clientes.Apellidos',
            'clientes.Direccion',
            'clientes.Ubicacion',
            'clientes.Telf',
            'clientes.DNI',
            'clientes.Nacimiento',
            'clientes.Sexo',
            'usuarios.Usuario as usuarios',
        )
            ->join('usuarios', 'clientes.IdUsuario', '=', 'usuarios.IdUsuario')
            ->get();

        return $result;
    }

    public function get(int $id)
    {
        $model = ClienteModel::find($id);
        if ($model == null) {
            $model = new ClienteModel();
        }

        return $model;
    }

    public function insert($obj)
    {
        $model = new ClienteModel();
        $model->IdCliente = $obj->IdCliente;
        $model->IdUsuario = $obj->IdUsuario;
        $model->Nombres = $obj->Nombres;
        $model->Apellidos = $obj->Apellidos;
        $model->Direccion = $obj->Direccion;
        $model->Ubicacion = $obj->Ubicacion;
        $model->Telf = $obj->Telf;
        $model->DNI = $obj->DNI;
        $model->Nacimiento = $obj->Nacimiento;
        $model->Sexo = $obj->Sexo;
        $model->save();
    }

    public function update($obj)
    {
        $model = ClienteModel::find($obj->IdCliente);
        $model->IdCliente = $obj->IdCliente;
        $model->IdUsuario = $obj->IdUsuario;
        $model->Nombres = $obj->Nombres;
        $model->Apellidos = $obj->Apellidos;
        $model->Direccion = $obj->Direccion;
        $model->Ubicacion = $obj->Ubicacion;
        $model->Telf = $obj->Telf;
        $model->DNI = $obj->DNI;
        $model->Nacimiento = $obj->Nacimiento;
        $model->Sexo = $obj->Sexo;
        $model->save();
    }

    public function delete(int $id)
    {
        $model = ClienteModel::find($id);
        $model->delete();
    }
}
