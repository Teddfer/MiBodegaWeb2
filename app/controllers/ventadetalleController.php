<?php

namespace App\Controllers;

use App\Interfaces\IProductoService;
use App\Interfaces\IVentaDetalleService;
use App\Interfaces\IVentaService;
use Jenssegers\Blade\Blade;
use Libs\Controller;
use Libs\Database;
use stdClass;

class VentaDetalleController extends Controller
{
    private readonly IVentaDetalleService $service;
    private readonly IVentaService $ventaService;
    private readonly IProductoService $productoService;

    public function __construct(
        IVentaDetalleService $service,
        IVentaService $ventaService,
        IProductoService $productoService
    ) {
        $this->service = $service;
        $this->ventaService = $ventaService;
        $this->productoService = $productoService;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll(true);
        echo $this->blade->render('ventadetalle.index', ['data' => $data]);
    }

    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $idventa = isset($param[1]) ? $param[1] : 0;
        $idproducto = isset($param[2]) ? $param[2] : 0;

        $data = $this->service->get($id);

        $ventas = $this->ventaService->getAll();
        $productos = $this->productoService->getAll('Estado');

        echo $this->blade->render('ventadetalle.detail', [
            'data' => $data,
            'ventas' => $ventas,
            'productos' => $productos,
            'idventa' => $idventa,
            'idproducto' => $idproducto
        ]);
    }

    public function save()
    {
        $id = isset($_POST['IdVentasDetalle']) ? intval($_POST['IdVentasDetalle']) : 0;
        $obj = new \stdClass();
        $obj->IdVentasDetalle = $id;
        $obj->IdVenta = $_POST['IdVenta'];
        $obj->IdProducto = $_POST['IdProducto'];
        $obj->Cantidad = $_POST['Cantidad'];
        $obj->PrecioVenta = $_POST['PrecioVenta'];
        $obj->Item = $_POST['Item'];

        if ($id > 0) {
            $rpta = $this->service->update($obj);
        } else {
            $rpta = $this->service->insert($obj);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Venta Detalle guardada correctamente',
                'redirection' => URL . 'ventadetalle/index'
            ];
        }

        echo json_encode($response);

        //header("Location:" . URL . "producto/index");
    }

    public function delete($param = null)
    {
        $id = $param[0] ?? 0;
        if ($id > 0) {
            $rpta = $this->service->delete($id);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Venta Detalle eliminada correctamente',
                'redirection' => URL . 'ventadetalle/index'
            ];
        }

        echo json_encode($response);
    }
}
