@extends('TemplateAdmin.index')

@section('contents')

@php 

            //var_dump($marca);

    $titulo = 'Inclusão de uma nova marca!!!';
    $endpoint = '/marca/novo';
    $input_nome = '';
    $input_fantasia = '';

    if (isset($marca)) {
        $titulo = 'Alteração de uma nova marca!!!';
        $endpoint = '/marca/alterar';
        $input_nome = $marca['nome'];
        $input_fantasia = $marca['nome_fantasia'];
    }
@endphp 

<h1 class="h3 mb-4 text-gray-800">{{$titulo}}</h1>
<div class="card">
    <div class="card-header">
        Criar nova marca
    </div>
    <div class="card-body">
        <form method="post" action={{$endpoint}}>
            @CSRF
            <label for="exampleDataList" class="form-label">Nome da marca</label>
            <input class="form-control" name="nome" placeholder="Philips" value={{$input_nome}}>

            <label for="exampleDataList" class="form-label">Nome Fantasia</label>
            <input class="form-control" name="nome_fantasia" placeholder="LG" value={{$input_fantasia}}>

            <label for="exampleDataList" class="form-label">Situação</label>
            <select class="form-control" name="situacao" >
                <option value="1" selected>Ativo</option>
                <option value="0">Inativo</option>
            </select>

            <br>

            <input type="submit" class="btn btn-success" value="Salvar">
        </form>
    </div>
</div>

@endsection