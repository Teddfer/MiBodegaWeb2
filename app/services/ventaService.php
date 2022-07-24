<?php

namespace App\Services;

use App\Interfaces\IVentaService;
use App\Models\VentaModel;
use Libs\Database;

class VentaService implements IVentaService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = VentaModel::select(
            'ventas.IdVenta',
            'ventas.IdCliente',
            'ventas.FEmision',
            'ventas.HEmision',
            'clientes.DNI as clientes',
        )
            ->join('clientes', 'ventas.IdCliente', '=', 'clientes.IdCliente')
            ->orderByDesc('ventas.IdVenta')
            ->get();

        return $result;
    }

    public function get(int $id)
    {
        $model = VentaModel::find($id);
        if ($model == null) {
            $model = new VentaModel();
        }

        return $model;
    }

    public function insert($obj)
    {
        $model = new VentaModel();
        $model->IdVenta = $obj->IdVenta;
        $model->IdCliente = $obj->IdCliente;
        $model->FEmision = $obj->FEmision;
        $model->HEmision = $obj->HEmision;
        return $model->save();
    }

    public function update($obj)
    {
        $model = VentaModel::find($obj->IdVenta);
        $model->IdVenta = $obj->IdVenta;
        $model->IdCliente = $obj->IdCliente;
        $model->FEmision = $obj->FEmision;
        $model->HEmision = $obj->HEmision;
        return $model->save();
    }

    public function delete(int $id)
    {
        $model = VentaModel::find($id);
        return $model->delete();
    }
}
