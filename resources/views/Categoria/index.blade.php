@extends('TemplateAdmin.index')

@section('contents')
<h1 class="h3 mb-4 text-gray-800">Lista de Categorias</h1>
<div class="card">
    <div class="card-header"> 
        Categorias
    </div>
        <table class="table table-bordered dataTable">
            <thead>
                <td>ID</td>
                <td>Nome</td>
                <td>Opções</td>
            </thead>
            <tbody>
                @foreach($categorias as $linha)
                    <tr>
                        <td>{{ $linha['id'] }}</td>
                        <td>{{ $linha['nome'] }}</td>
                        <td>
                            <a href="#" class="btn btn-success">
                                <li class="fa fa-edit"></li>
                            </a>
                    
                            <a href="#" class="btn btn-danger">
                                <li class="fa fa-trash"></li>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
    
</div>
@endsection