@extends('TemplateAdmin.index')

@section('contents')

@php 

    //var_dump($produtos);

    $titulo = 'Inclusão de um novo produto!!!';
    $endpoint = '/produto/novo';
    $input_nome = '';

    if (isset($produto)) {
        $titulo = 'Alteração de um novo produto!!!';
        $endpoint = '/produto/alterar';
        $input_nome = $produto['nome'];
    }
@endphp 

<h1 class="h3 mb-4 text-gray-800">{{$titulo}}</h1>
<div class="card">
    <div class="card-header">
        Criar novo Produto
    </div>
    <div class="card-body">
        <form method="post" action={{$endpoint}}>
            @CSRF
            <label for="exampleDataList" class="form-label">Nome do Produto</label>
            <input class="form-control" name="nome" placeholder="Furadeira" value={{$input_nome}}>

            <label for="exampleDataList" class="form-label">Categoria</label>
            <input class="form-control" name="nome" placeholder="Ferramentass" value={{$input_nome}}>

            <label for="exampleDataList" class="form-label">Marca</label>
            <input class="form-control" name="nome" placeholder="Philips" value={{$input_nome}}>


            <label for="exampleDataList" class="form-label">Preço</label>
            <input class="form-control" name="nome" placeholder="Philips" value={{$input_nome}}>

            <label for="exampleDataList" class="form-label">Quantidade</label>
            <input class="form-control" name="nome" placeholder="Philips" value={{$input_nome}}>

            

            <br>

            <input type="submit" class="btn btn-success" value="Salvar">
        </form>
    </div>
</div>

@endsection