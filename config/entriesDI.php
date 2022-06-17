<?php

use App\Services\CategoriaServices;
use DI\Container;
use Libs\Database;

return [
    'icategoriaservices' => function (Container $c) {
        return new CategoriaServices($c->get(Database::class));
    }
];