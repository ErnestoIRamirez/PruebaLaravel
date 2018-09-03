<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Http\Controllers\Controller;

class PruebaController extends Controller {
    public function prueba($param,$param2) {
        return 'Estoy dentro de PruebaController'.$param.$param2;
    }
}
