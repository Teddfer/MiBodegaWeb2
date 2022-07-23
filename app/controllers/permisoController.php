<?php

namespace App\Controllers;

use App\Interfaces\IPermisoService;
use App\Interfaces\IUsuarioTipoService;
use Jenssegers\Blade\Blade;
use Libs\Controller;
use Libs\Database;
use stdClass;

class PermisoController extends Controller
{
    private readonly IPermisoService $service;
    private readonly IUsuarioTipoService $usuariotipoService;

    public function __construct(
        IPermisoService $service,
        IUsuarioTipoService $usuariotipoService
    ) {
        $this->service = $service;
        $this->usuariotipoService = $usuariotipoService;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll(true);
        echo $this->blade->render('permiso.index', ['data' => $data]);
    }

    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $idtipo = isset($param[1]) ? $param[1] : 0;

        $data = $this->service->get($id);

        $usuarios_tipo = $this->usuariotipoService->getAllSimple();

        echo $this->blade->render('permiso.detail', [
            'data' => $data,
            'usuarios_tipo' => $usuarios_tipo,
            'idtipo' => $idtipo
        ]);
    }

    public function save()
    {
        $id = isset($_POST['IdPermiso']) ? intval($_POST['IdPermiso']) : 0;
        $obj = new \stdClass();
        $obj->IdPermiso = $id;
        $obj->IdTipo = $_POST['IdTipo'];
        $obj->Tablas = $_POST['Tablas'];

        if ($id > 0) {
            $rpta = $this->service->update($obj);
        } else {
            $rpta = $this->service->insert($obj);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Permiso guardado correctamente',
                'redirection' => URL . 'permiso/index'
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
                'message' => 'Permiso eliminado correctamente',
                'redirection' => URL . 'permiso/index'
            ];
        }

        echo json_encode($response);
    }
}
