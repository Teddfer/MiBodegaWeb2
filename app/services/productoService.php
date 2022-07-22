<?php

namespace App\Services;

use App\Interfaces\IProductoService;
use App\Models\ProductoModel;
use Libs\Database;

class ProductoService implements IProductoService
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll(bool $estado)
    {
        $result = ProductoModel::select(
            'productos.IdProducto',
            'productos.IdMarca',
            'productos.IdCategoria',
            'productos.Nombre',
            'productos.Descripcion',
            'productos.PrecioCosto',
            'productos.PrecioVenta',
            'productos.Stock',
            'productos.StockMinimo',
            'productos.Estado',
            'categorias.Nombre as categorias',
            'marcas.Nombre as marcas',
        )
            ->join('categorias', 'productos.IdCategoria', '=', 'categorias.IdCategoria')
            ->join('marcas', 'productos.IdMarca', '=', 'marcas.IdMarca')
            ->where('productos.Estado', $estado)
            ->orderByDesc('productos.IdProducto')
            ->get();

        return $result;
    }

    public function get(int $id)
    {
        $model = ProductoModel::find($id);
        if ($model == null) {
            $model = new ProductoModel();
            $model->Estado = true;
        }

        return $model;
    }

    public function insert($obj)
    {
        $model = new ProductoModel();
        $model->IdProducto = $obj->IdProducto;
        $model->IdMarca = $obj->IdMarca;
        $model->IdCategoria = $obj->IdCategoria;
        $model->Nombre = $obj->Nombre;
        $model->Descripcion = $obj->Descripcion;
        $model->PrecioCosto = $obj->PrecioCosto;
        $model->PrecioVenta = $obj->PrecioVenta;
        $model->Stock = $obj->Stock;
        $model->StockMinimo = $obj->StockMinimo;
        $model->Estado = $obj->Estado;
        return $model->save();
    }

    public function update($obj)
    {
        $model = ProductoModel::find($obj->IdProducto);
        $model->IdProducto = $obj->IdProducto;
        $model->IdMarca = $obj->IdMarca;
        $model->IdCategoria = $obj->IdCategoria;
        $model->Nombre = $obj->Nombre;
        $model->Descripcion = $obj->Descripcion;
        $model->PrecioCosto = $obj->PrecioCosto;
        $model->PrecioVenta = $obj->PrecioVenta;
        $model->Stock = $obj->Stock;
        $model->StockMinimo = $obj->StockMinimo;
        $model->Estado = $obj->Estado;
        return $model->save();
    }

    public function delete(int $id)
    {
        $model = ProductoModel::find($id);
        return $model->delete();
    }
}
