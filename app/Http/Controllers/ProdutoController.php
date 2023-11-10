<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Marca;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all()->toArray();
        $categoria = Categoria::all()->toArray();
        $marca = Marca::all()->toArray();
        
        return View("Produto.index",
        [
            'produtos' => $produtos,
            'categoria' => $categoria,
            'marca' => $marca
        ]
    );
    }

    public function inserir()
    {
        $produtos = Produto::all()->toArray();
        $categoria = Categoria::all()->toArray();
        $marca = Marca::all()->toArray();
        
        return View("Produto.formulario",
        [
            'produtos' => [],
            'categoria' => $categoria,
            'marca' => $marca
        ]
    );
    }

    public function salvar_novo(Request $request)
    {
        // @CSRF
        $produto = new Produto;
        $produto->nome = $request->input("nome");
        $produto->id_categoria = $request->input("categoria");
        $produto->id_marca = $request->input("marca");
        $produto->preco = $request->input("preco");
        $produto->quantidade = $request->input("quantidade");
        $produto->descricao = $request->input("descricao");
 

        $produto->save();

        
        return redirect("/produto");
    }

    public function excluir($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect('/produto');
    }

    public function alterar($id)
    {
       $produtos = Produto::find($id)->toArray();

       $categoria = Categoria::all()->toArray();
       $marca = Marca::all()->toArray();
       
       return View("Produto.formulario",
        [
            'produtos' => $produtos,
            'categoria' => $categoria,
            'marca' => $marca
        ]
    );
    }

    public function salvar_alterar(Request $request)
    {
       $id = $request->input('id');
       $produto = Produto::find($id);
       var_dump($id);

   
       $produto->nome = $request->input("nome");
        $produto->id_categoria = $request->input("categoria");
        $produto->id_marca = $request->input("marca");
        $produto->preco = $request->input("preco");
        $produto->quantidade = $request->input("quantidade");
        $produto->descricao = $request->input("descricao");
        $produto->save();
        
        return redirect("/marca");
    }

}
