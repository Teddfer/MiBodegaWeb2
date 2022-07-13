<?php

namespace Libs;

use App\Services\CategoriaService;

class Core
{
    public function __construct(ContainerDI $container)
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $service_name = "i" . $url[0] . "service";
        $flag_service = $container->searchEntry($service_name);

        if (empty($url[0])) {
            require_once '../app/controllers/homeController.php';

            if ($flag_service) {
                $controller = new \App\Controllers\HomeController($container->getContainer()->get($service_name));
            } else {
                $controller = new \App\Controllers\HomeController();
            }

            $controller->index();
            return false;
        }

        $file_controller = '../app/controllers/' . $url[0] . 'Controller.php';

        if (file_exists($file_controller)) {
            require_once $file_controller;
            $controller_name = '\\App\\Controllers\\' . $url[0] . 'Controller';

            

            if ($flag_service) {
                switch ($service_name) {
                    case 'iproductoservice':
                        $controller = new $controller_name(
                            $container->getContainer()->get('iproductoservice'),
                            $container->getContainer()->get('icategoriaservice'),
                            $container->getContainer()->get('imarcaservice')
                            
                        );
                        break;
                    case 'algo':
                        break;
                    default:
                        $controller = new $controller_name($container->getContainer()->get($service_name));
                        break;
                }
            } else {
                $controller = $controller_name();
            }

            $nelementos = sizeof($url);
            if ($nelementos >= 2) {
                if (method_exists($controller, $url[1])) {
                    if ($nelementos >= 3) {
                        $param  = [];
                        for ($i = 2; $i < $nelementos; $i++) {
                            array_push($param, $url[$i]);
                        }
                        $controller->{$url[1]}($param);
                    } else {
                        $controller->{$url[1]}();
                    }
                } else {
                    echo "La accion {$url[1]} No Existe";
                }
            } else {
                $controller->index();
            }
        } else {
            echo "Controlador {$url[0]} NO existe";
        }
    }
}
