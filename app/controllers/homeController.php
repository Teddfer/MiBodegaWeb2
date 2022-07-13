<?php

namespace App\Controllers;

use Jenssegers\Blade\Blade;
use Libs\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->loadBlade();
    }

    public function index()
    {
        //echo "Página de Inicio", "</br>";
        //require_once __DIR__ .  '/../views/home/index.php';
        echo $this->blade->make('home.index', ['name' => 'Teddy'])->render();
    }

    public function prueba()
    {
        //echo "Página de Inicio", "</br>";
        //require_once __DIR__ .  '/../views/home/index.php';
        echo $this->blade->make('home.prueba', ['name' => 'Teddy'])->render();
    }
}
