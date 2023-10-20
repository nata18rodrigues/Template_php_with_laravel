<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $dados = Produto::all()->toArray();
        
        return View("Produto.index",
            [
                'produtos' => $dados
            ]
        );
    }

    public function inserir()
    {
        
        return View("Produto.formulario");
    }

}
