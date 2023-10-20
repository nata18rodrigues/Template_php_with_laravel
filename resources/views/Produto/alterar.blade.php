@extends('TemplateAdmin.index')

@section('contents')
<h1 class="h3 mb-4 text-gray-800">ALTERAR Marca de produtos</h1>
<div class="card">
    <div class="card-body">
        
        @php var_dump($marcas); @endphp 
        <form method="put" action="/marca/alterar">
            @CSRF

            <label for="exampleDataList" class="form-label" >id</label>
            <input class="form-control" name="id" placeholder="Philips">
            
            <label for="exampleDataList" class="form-label" >Nome da marca</label>
            <input class="form-control" name="nome" placeholder="Philips">

            <label for="exampleDataList" class="form-label">Nome Fantasia</label>
            <input class="form-control" name="nome_fantasia" placeholder="LG">

            <label for="exampleDataList" class="form-label">Situação</label>
            <select class="form-control" name="situacao">
                <option value="1" selected>Ativo</option>
                <option value="0">Inativo</option>
            </select>

            <br>

            <input type="submit" class="btn btn-success" value="Salvar">
        </form>
    </div>
</div>

@endsection