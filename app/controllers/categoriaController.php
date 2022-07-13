<?php

namespace App\Controllers;

use App\Interfaces\ICategoriaService;
use App\Services\CategoriaService;
use Jenssegers\Blade\Blade;
use Libs\Controller;
use Libs\Database;

class CategoriaController extends Controller
{
    private ICategoriaService $service;

    public function __construct(ICategoriaService $service)
    {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll(true);
        echo $this->blade->render('categoria.index', ['data' => $data]);
    }

    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;

        $data = $this->service->get($id);

        echo $this->blade->render('categoria.detail', [
            'data' => $data
        ]);
    }

    public function save()
    {
        $id = isset($_POST['IdCategoria']) ? intval($_POST['IdCategoria']) : 0;
        $obj = new \stdClass();
        $obj->IdCategoria = $id;
        $obj->Nombre = $_POST['Nombre'];
        $obj->Descripcion = $_POST['Descripcion'];

        if ($id > 0) {
            $this->service->update($obj);
        } else {
            $this->service->insert($obj);
        }
        header("Location:" . URL . "categoria/index");
    }

    public function delete($param = null)
    {
        $id = isset($param[0]) ? ($param[0]) : 0;
        if ($id > 0) {
            $this->service->delete($id);
            header("Location:" . URL . "categoria/index");
        }
    }

}
