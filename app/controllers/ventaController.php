<?php

namespace App\Controllers;

use App\Interfaces\IClienteService;
use App\Interfaces\IVentaService;
use Jenssegers\Blade\Blade;
use Libs\Controller;
use Libs\Database;
use stdClass;

class VentaController extends Controller
{
    private readonly IVentaService $service;
    private readonly IClienteService $clienteService;

    public function __construct(
        IVentaService $service,
        IClienteService $clienteService
    ) {
        $this->service = $service;
        $this->clienteService = $clienteService;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll(true);
        echo $this->blade->render('venta.index', ['data' => $data]);
    }

    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $idcliente = isset($param[1]) ? $param[1] : 0;

        $data = $this->service->get($id);

        $clientes = $this->clienteService->getAll();

        echo $this->blade->render('venta.detail', [
            'data' => $data,
            'clientes' => $clientes,
            'idcliente' => $idcliente
        ]);
    }

    public function save()
    {
        $id = isset($_POST['IdVenta']) ? intval($_POST['IdVenta']) : 0;
        $obj = new \stdClass();
        $obj->IdVenta = $id;
        $obj->IdCliente = $_POST['IdCliente'];
        $obj->FEmision = $_POST['FEmision'];
        $obj->HEmision = $_POST['HEmision'];

        if ($id > 0) {
            $rpta = $this->service->update($obj);
        } else {
            $rpta = $this->service->insert($obj);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Venta guardada correctamente',
                'redirection' => URL . 'venta/index'
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
                'message' => 'Venta eliminada correctamente',
                'redirection' => URL . 'venta/index'
            ];
        }

        echo json_encode($response);
    }
}
