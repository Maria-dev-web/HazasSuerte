<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller {
    public function create () {
        return view('usuarios.create');
    }

    public function index () {
        return view('usuarios.index');
    }
}
