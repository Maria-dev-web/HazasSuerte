<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionesController extends Controller {
    public function create () {
        return view('sesiones.create');
    }

    public function index () {
        return view('sesiones.index');
    }
}
