<?php

namespace App\Services;

use App\Interfaces\IVentaDetalleService;
use App\Models\VentaDetalleModel;
use Libs\Database;

class VentaDetalleService implements IVentaDetalleService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $result = VentaDetalleModel::select(
            'ventasdetalle.IdVentasDetalle',
            'ventasdetalle.IdVenta',
            'ventasdetalle.IdProducto',
            'ventasdetalle.Cantidad',
            'ventasdetalle.PrecioVenta',
            'ventasdetalle.Item',
            'ventas.IdVenta as ventas',
            'productos.Nombre as productos',
        )
            ->join('ventas', 'ventasdetalle.IdVenta', '=', 'ventas.IdVenta')
            ->join('productos', 'ventasdetalle.IdProducto', '=', 'productos.IdProducto')
            ->orderByDesc('ventasdetalle.IdVentasDetalle')
            ->get();

        return $result;
    }

    public function get(int $id)
    {
        $model = VentaDetalleModel::find($id);
        if ($model == null) {
            $model = new VentaDetalleModel();
        }

        return $model;
    }

    public function insert($obj)
    {
        $model = new VentaDetalleModel();
        $model->IdVentasDetalle = $obj->IdVentasDetalle;
        $model->IdVenta = $obj->IdVenta;
        $model->IdProducto = $obj->IdProducto;
        $model->Cantidad = $obj->Cantidad;
        $model->PrecioVenta = $obj->PrecioVenta;
        $model->Item = $obj->Item;
        return $model->save();
    }

    public function update($obj)
    {
        $model = VentaDetalleModel::find($obj->IdVentasDetalle);
        $model->IdVentasDetalle = $obj->IdVentasDetalle;
        $model->IdVenta = $obj->IdVenta;
        $model->IdProducto = $obj->IdProducto;
        $model->Cantidad = $obj->Cantidad;
        $model->PrecioVenta = $obj->PrecioVenta;
        $model->Item = $obj->Item;
        return $model->save();
    }

    public function delete(int $id)
    {
        $model = VentaDetalleModel::find($id);
        return $model->delete();
    }
}
