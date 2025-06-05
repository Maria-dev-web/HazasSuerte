<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HerederosController extends Controller {
    public function create () {
        return view('herederos.create');
    }

    public function index () {
        return view('herederos.index');
    }
}
