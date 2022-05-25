<?php

namespace Libs;

use Jenssegers\Blade\Blade;

class Controller
{
    protected $blade;

    public function loadBlade()
    {
        $patchViews = __DIR__ . '/../app/views';
        $patchCache = __DIR__ . '/..s/cache';

        $this->blade = new Blade($patchViews, $patchCache);
    }
}
