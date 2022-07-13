<?php

use App\Services\CategoriaService;
use App\Services\ProductoService;
use App\Services\MarcaService;
use DI\Container;
use Libs\Database;

return [
    'icategoriaservice' => function (Container $c) {
        return new CategoriaService($c->get(Database::class));
    },

    'imarcaservice' => function (Container $c) {
        return new MarcaService($c->get(Database::class));
    },

    'iproductoservice' => function (Container $c) {
        return new ProductoService($c->get(Database::class));
    }
];
