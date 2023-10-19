<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $dados = Categoria::all()->toArray();
        
        return View("Categoria.index",
            [
                'categorias' => $dados
            ]
        );
    }

    public function inserir()
    {
        return View("Categoria.inserir");
    }

    public function excluir()
    {
        return View("Categoria.excluir");
    }

    public function alterar()
    {
        return View("Categoria.alterar");
    }
}
