@extends('TemplateAdmin.index')

@section('contents')
@php 
    var_dump($produtos);
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
                <td>Marca</td>
                <td>Categoria</td>
                <td>Situação</td>
                <td>Opções</td>
            </thead>
     
                <tbody>
                @foreach($produtos as $linha)
                    <tr>
                        <td>{{ $linha['id'] }}</td>
                        <td>{{ $linha['nome'] }}</td>

                        <td>{{ $linha['preco'] }}</td>
                        <td>{{ $linha['quantidade'] }}</td>
                        <td>{{ $linha['descricao'] }}</td>
                        <td>
                            <a href="/marca/alterar/{{$linha['id']}}" class="btn btn-success">
                                <li class="fa fa-edit"></li>
                            </a>
                            <a href="/marca/excluir/{{$linha['id']}}" class="btn btn-danger">
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