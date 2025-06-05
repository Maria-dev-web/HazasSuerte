<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SorteoController extends Controller {
    public function create () {
        return view('sorteo.create');
    }

    public function index () {
        return view('sorteo.index');
    }
}
