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
        return View("Categoria.formulario");
    }

    public function salvar_novo(Request $request)
    {
        // @CSRF
        $categoria = new Categoria;
        $categoria->nome = $request->input("nome");
        $categoria->situacao = $request->input("situacao");

        $categoria->save();

        
        return redirect("/categoria");
    }

    public function excluir($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect('/categoria');
    }

    public function alterar($id)
    {
        $categoria = Categoria::find($id)->toArray();
        return View('Categoria.formulario',['categoria' => $categoria]);
    }

    public function salvar_alterar(Request $request)
    {
       $id = $request->input('id');
       $categoria = Categoria::find($id);
       var_dump($id);

       $categoria->nome         = $request->input("nome");
       $categoria->situacao     = $request->input("situacao");
       $categoria->save();
        
        return redirect("/categoria");
    }
}
