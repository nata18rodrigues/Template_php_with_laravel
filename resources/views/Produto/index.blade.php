@extends('TemplateAdmin.index')

@section('contents')
@php 
    //var_dump($produtos);


    $teste1 = array_filter($categoria, function ($item) {
            return $item["id"] === 1;
        })[0];

  
   // var_dump($teste1)


@endphp 

<h1 class="h3 mb-4 text-gray-800">Produtos</h1>
<div class="card">
    <div class="card-header"> 
        Lista de produtos
    </div>
    <div class="card-body"> 
        <a href='/produto/novo' class="btn btn-success">
            Novo
        </a>
    
        <table table class="table table-bordered dataTable">
            <thead>
                <td>ID</td>
                <td>Nome</td>
                <td>Categoria</td>
                <td>Marca</td>
                <td>Preco</td>
                <td>Quantidade</td>
                <td>Descrição</td>


            </thead>
     
                <tbody>
                @foreach($produtos as $linha)
                    <tr>
                        <td>{{ $linha['id'] }}</td>
                        <td>{{ $linha['nome'] }}</td>

                        <td> {{ $linha['id_categoria'] }}</td>

                        <td>{{ $linha['id_marca'] }}</td>
                        <td>{{ $linha['preco'] }}</td>
                        <td>{{ $linha['quantidade'] }}</td>
                        <td>{{ $linha['descricao'] }}</td>
                        <td>
                            <a href="/produto/alterar/{{$linha['id']}}" class="btn btn-success">
                                <li class="fa fa-edit"></li>
                            </a>
                            <a href="/produto/excluir/{{$linha['id']}}" class="btn btn-danger">
                                <li class="fa fa-trash"></li>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>    
    </div>
</div>
@endsection