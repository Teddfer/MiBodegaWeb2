<?php

namespace App\Controllers;

use App\Interfaces\ICategoriaServices;
use App\Services\CategoriaServices;
use Jenssegers\Blade\Blade;
use Libs\Controller;

class CategoriaController extends Controller
{
    private CategoriaServices $service;

    public function __construct(ICategoriaServices $service)
    {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll();
        myEchoPre($data);
        //echo $this->blade->make('home.index', ['name' => 'Teddy'])->render();
    }
}
