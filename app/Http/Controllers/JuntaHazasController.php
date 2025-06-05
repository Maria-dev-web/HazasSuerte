<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuntaHazasController extends Controller {

    public function create () {
        return view('juntaHazas.create');
    }

    public function index () {
        return view('juntaHazas.index');
    }
}