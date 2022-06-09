<?php

namespace App\Controllers;

use App\Models\VendedorModel;
use Jenssegers\Blade\Blade;
use Libs\Controller;

class VendedorController extends Controller
{

    public function __construct()
    {
        //$this->loadBlade();
    }

    public function index()
    {
        //echo "Página de Inicio", "</br>";
        //require_once __DIR__ .  '/../views/home/index.php';
        //echo $this->blade->make('home.index', ['name' => 'Teddy'])->render();
        $data = (new VendedorModel())->getAll();

        myEchoPre($data);
    }
}
