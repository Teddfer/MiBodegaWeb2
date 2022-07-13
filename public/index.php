<?php

use Libs\ContainerDI;
use Libs\Core;

require_once "../vendor/autoload.php";

//require_once "../libs/core.php";
//require_once "../app/helpers/helpers.php";

//Cargamos el archivo de Configuración .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require_once "../config/config.php";

$core = new Core(new ContainerDI);
