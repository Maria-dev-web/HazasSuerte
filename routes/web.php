<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HazasController;
use App\Http\Controllers\HerederosController;
use App\Http\Controllers\JuntaHazasController;
use App\Http\Controllers\PadronColonosController;
use App\Http\Controllers\PadronHabitantesController;
use App\Http\Controllers\SesionesController;
use App\Http\Controllers\SorteoController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\View;

Route::get('/', HomeController::class)->name('home');

Route::controller(HazasController::class)-> group(function(){
    Route::get('/hazas/create', 'create')->name('createHazas');

    Route::get('/hazas', 'index')->name('hazas');

    Route::get('/hazas/buscar', 'buscar')->name('buscarHaza');

    Route::post('/hazas', 'store')->name('storeHazas'); 

    Route::get('/hazas/edit/{idHaza}', 'edit')->name('editHaza');

    Route::put('/hazas/update/{idHaza}', 'update')->name('updateHaza');

    Route::delete('/hazas/{idHaza}', 'destroy')->name('destroyHaza');
});

    Route::controller(HerederosController::class)-> group(function(){
        Route::get('/herederos/create', 'create')->name('createHerederos');

        Route::get('/herederos', 'index')->name('herederos');
    });

    Route::controller(JuntaHazasController::class)-> group(function(){
        Route::get('/juntaHazas/create', 'create')->name('createJuntaHazas');

        Route::get('/juntaHazas', 'index')->name('juntaHazas');
    });

    Route::controller(PadronColonosController::class)-> group(function(){
        Route::get('/padronColonos/create', 'create')->name('createPadronColonos');

        Route::get('/padronColonos', 'index')->name('padronColonos');

        Route::get('/padronColonos/edit/{idColono}', 'edit')->name('editPadronColonos');

        Route::get('/padronColonos/buscar', 'buscar')->name('buscarPadronColonos');

        Route::post('/padronColonos', 'store')->name('storePadronColonos'); 

        Route::put('/padronColonos/update/{idColono}', 'update')->name('updatePadronColonos');

        Route::delete('/padronColonos/{idColono}', 'destroy')->name('destroyPadronColonos');
    });

    Route::controller(PadronHabitantesController::class)-> group(function(){

        Route::get('/padronHabitantes/create', 'create')->name('createPadronHabitantes');

        Route::get('/padronHabitantes', 'index')->name('padronHabitantes');
        
        Route::get('/padronHabitantes/edit/{idHabitante}', 'edit')->name('editPadronHabitantes');

        Route::get('/padronHabitantes/buscar', 'buscar')->name('buscarPadronHabitantes');

        Route::post('/padronHabitantes', 'store')->name('storePadronHabitantes'); 

        Route::put('/padronHabitantes/update/{idHabitante}', 'update')->name('updatePadronHabitantes');

        Route::delete('/padronHabitantes/{idHabitante}', 'destroy')->name('destroyPadronHabitantes');
    });

    Route::controller(SesionesController::class)-> group(function(){
        Route::get('/sesiones/create', 'create')->name('createSesiones');

        Route::get('/sesiones', 'index')->name('sesiones');
    });

    Route::controller(SorteoController::class)-> group(function(){
        Route::get('/sorteo/create', 'create')->name('createSorteo');

        Route::get('/sorteo', 'index')->name('sorteo');
    });

    Route::controller(UsuariosController::class)-> group(function(){
        Route::get('/usuarios/create', 'create')->name('createUsuarios');

        Route::get('/usuarios', 'index')->name('usuarios');
    });