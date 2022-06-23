<?php

namespace App\Controllers;

use App\Services\CategoriaService;
use Jenssegers\Blade\Blade;
use Libs\Controller;

class CategoriaController extends Controller
{
    private $service;

    public function __construct(CategoriaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->getAll();
        myEchoPre($data);
    }
}
