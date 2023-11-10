@extends('TemplateAdmin.index')

@section('contents')

@php 

    //var_dump($produtos);
   // var_dump($categoria);
   // var_dump($marca);

    $titulo = 'Inclusão de um novo produto!!!';
    $endpoint = '/produto/novo';
    $input_nome = '';
    $input_id_categoria = '';
    $input_id_marca = '';
    $input_preco = '';
    $input_quantidade = '';
    $input_descricao = '';



    if (isset($produto)) {
        $titulo = 'Alteração de um novo produto!!!';
        $endpoint = '/produto/alterar';
        $input_nome = $produto['nome'];
        $input_id_categoria = $produto['id_categoria'];
        $input_id_marca = $produto['id_produto'];
        $input_preco = $produto['preco'];
        $input_quantidade = $produto['quantidade'];
        $input_descricao = $produto['descricao'];
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
            <select class="form-control" name="categoria" >
                @foreach($categoria as $c)
                    <option value="{{$c['id']}}">{{ $c['nome'] }}</option>
                @endforeach
            </select>


            <label for="exampleDataList" class="form-label">Marca</label>
            <select class="form-control" name="marca" >
                @foreach($marca as $m)
                    <option value="{{$m['id']}}">{{ $m['nome'] }}</option>
                @endforeach
            </select>




            <label for="exampleDataList" class="form-label">Preço</label>
            <input class="form-control"  type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" name="preco" value={{$input_preco}}>

            <label for="exampleDataList" class="form-label">Quantidade</label>
            <input class="form-control" name="quantidade" placeholder="1" value={{$input_quantidade}}>


            <label for="exampleDataList" class="form-label">Descricao</label>
            <textarea class="form-control" name="descricao" placeholder="..." value={{$input_descricao}} ></textarea>
            

            <br>

            <input type="submit" class="btn btn-success" value="Salvar">
        </form>
    </div>
</div>

@endsection