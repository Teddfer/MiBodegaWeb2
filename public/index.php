<?php

use Libs\ContainerDI;
use Libs\Core;

$container = new ContainerDI;
$builder->ignorePhpDocErrors(true);

require_once "../vendor/autoload.php";

//$builder = new DI\ContainerBuilder();
//require_once "../libs/core.php";
//require_once "../app/helpers/helpers.php";

//Cargamos el archivo de Configuración .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require_once "../config/config.php";

$core = new Core($container);
