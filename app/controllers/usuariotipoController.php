<?php

namespace App\Controllers;

use App\Interfaces\IUsuarioTipoService;
use App\Services\CategoriaService;
use Jenssegers\Blade\Blade;
use Libs\Controller;
use Libs\Database;
use stdClass;

class UsuarioTipoController extends Controller
{
    private readonly IUsuarioTipoService $service;

    public function __construct(

        IUsuarioTipoService $service
    ) {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAllSimple(true);
        echo $this->blade->render('usuariotipo.index', ['data' => $data]);
    }

    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;

        $data = $this->service->get($id);

        echo $this->blade->render('usuariotipo.detail', [
            'data' => $data
        ]);
    }

    public function save()
    {
        $id = isset($_POST['IdTipo']) ? intval($_POST['IdTipo']) : 0;
        $obj = new \stdClass();
        $obj->IdTipo = $id;
        $obj->Nombre = $_POST['Nombre'];

        if ($id > 0) {
            $rpta = $this->service->update($obj);
        } else {
            $rpta = $this->service->insert($obj);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Usuario Tipo guardado correctamente',
                'redirection' => URL . 'usuariotipo/index'
            ];
        }

        echo json_encode($response);
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
                'message' => 'Usuario Tipo eliminado correctamente',
                'redirection' => URL . 'usuariotipo/index'
            ];
        }

        echo json_encode($response);
    }
}
