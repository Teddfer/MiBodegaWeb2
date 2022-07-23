<?php

namespace App\Controllers;

use App\Interfaces\IUsuarioTipoService;
use App\Interfaces\IUsuarioService;
use App\Services\CategoriaService;
use App\Services\MarcaService;
use Jenssegers\Blade\Blade;
use Libs\Controller;
use Libs\Database;
use stdClass;

class UsuarioController extends Controller
{
    private readonly IUsuarioService $service;
    private readonly IUsuarioTipoService $usuariotipoService;

    public function __construct(
        IUsuarioService $service,
        IUsuarioTipoService $usuariotipoService
    ) {
        $this->service = $service;
        $this->usuariotipoService = $usuariotipoService;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll(true);
        echo $this->blade->render('usuario.index', ['data' => $data]);
    }

    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $idtipo = isset($param[1]) ? $param[1] : 0;

        $data = $this->service->get($id);

        $usuarios_tipo = $this->usuariotipoService->getAllSimple();

        echo $this->blade->render('usuario.detail', [
            'data' => $data,
            'usuarios_tipo' => $usuarios_tipo,
            'idtipo' => $idtipo
        ]);
    }

    public function save()
    {
        $id = isset($_POST['IdUsuario']) ? intval($_POST['IdUsuario']) : 0;
        $obj = new \stdClass();
        $obj->IdUsuario = $id;
        $obj->IdTipo = $_POST['IdTipo'];
        $obj->Usuario = $_POST['Usuario'];
        $obj->Clave = $_POST['Clave'];
        $obj->Correo = $_POST['Correo'];

        if ($id > 0) {
            $rpta = $this->service->update($obj);
        } else {
            $rpta = $this->service->insert($obj);
        }

        if ($rpta) {
            $response = [
                'success' => true,
                'message' => 'Usuario guardado correctamente',
                'redirection' => URL . 'usuario/index'
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
                'message' => 'Usuario eliminado correctamente',
                'redirection' => URL . 'usuario/index'
            ];
        }

        echo json_encode($response);
    }
}
