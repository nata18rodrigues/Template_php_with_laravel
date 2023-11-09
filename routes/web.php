<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
//use App\Http\Controllers\CorController;


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
    Route::get('/excluir/{id}', [MarcaController::class, 'excluir']);
});

Route::get('/', function () {
    return View('Marca.index');
});


Route::group(['prefix'=>'categoria'], function() {
    #view
    Route::get('/', [CategoriaController::class, 'index']);    
    #create
    Route::get('/novo', [CategoriaController::class, 'inserir']);
    Route::post('/novo',[CategoriaController::class, 'salvar_novo']);
    #delete
    Route::get('/excluir/{id}', [CategoriaController::class, 'excluir']);
    #put
    Route::get('/alterar/{id}', [CategoriaController::class, 'alterar']);
    Route::post('/alterar',[CategoriaController::class, 'salvar_alterar']);
});
    
Route::get('/', function () {
    return View('Categoria.index');
});


Route::group(['prefix'=>'produto'], function() {
    #view
    Route::get('/', [ProdutoController::class, 'index']);    
    #create
    Route::get('/novo', [ProdutoController::class, 'inserir']);
    #update
    Route::get('/excluir', [ProdutoController::class, 'excluir']);
    #put
    Route::get('/update/{id}', [ProdutoController::class, 'alterar']);
});
    
Route::get('/', function () {
    return View('Produto.index');
});


Route::group(['prefix'=>'cor'], function() {
    #visualizar
    Route::get('/', [CorController::class, 'index']);
    #inserir
    Route::get('/novo',[CorController::class, 'inserir']);
    Route::post('/novo',[CorController::class, 'salvar_novo']);
    #alterar
    Route::get('/alterar/{id}',[CorController::class, 'alterar']);
    Route::post('/alterar',[CorController::class, 'salvar_alterar']);
    #excluir
    Route::get('/excluir/{id}', [CorController::class, 'excluir']);
});

Route::get('/', function () {
    return View('Cor.index');
});


