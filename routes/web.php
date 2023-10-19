<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;

use App\Http\Controllers\CategoriaController;


Route::group(['prefix'=>'marca'], function() {
    #visualizar
    Route::get('/', [MarcaController::class, 'index']);
    #inserir
    Route::get('/novo',[MarcaController::class, 'inserir']);
    Route::post('/novo',[MarcaController::class, 'salvar_novo']);
    #alterar
    Route::get('/alterar/{id}',[MarcaController::class, 'alterar']);
    Route::post('/alterar',[MarcaController::class, 'salvar_alterar']);
    #excluir
    Route::get('/excluir', [MarcaController::class, 'excluir']);
});

Route::get('/', function () {
    return View('Marca.index');
});


Route::group(['prefix'=>'categoria'], function() {
        Route::get('/', [CategoriaController::class, 'index']);
        Route::get('/inserir',[CategoriaController::class, 'inserir']);
        Route::get('/excluir',
                [CategoriaController::class, 'excluir']);
        Route::get('/update/{id}',
                [CategoriaController::class, 'alterar']);
    });
    
    Route::get('/', function () {
        return View('Categoria.index');
    });