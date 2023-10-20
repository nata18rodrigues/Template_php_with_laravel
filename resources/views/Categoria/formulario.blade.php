@extends('TemplateAdmin.index')

@section('contents')

@php 
    //var_dump($categoria);
    $titulo = 'Inclusão de uma nova categoria!!!';
    $endpoint = '/categoria/novo';
    $input_nome = '';
    $input_id = '';

    if (isset($categoria)) {
        $input_id = $categoria['id'];
        $titulo = 'Alteração de uma nova categoria!!!';
        $endpoint = '/categoria/alterar';
        $input_nome = $categoria['nome'];
    }
@endphp


<h1 class="h3 mb-4 text-gray-800">{{$titulo}}</h1>
<div class="card">
    <div class="card-header">
        Criar nova categoria
    </div>
    <div class="card-body">
        <form method="post" action={{$endpoint}}>
            @CSRF
            <input type="hidden" name='id' value={{$input_id}} />

            <label for="exampleDataList" class="form-label">Nome da categoria</label>
            <input class="form-control" name="nome" placeholder="Philips" value={{$input_nome}}>

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