@extends('index') //extends the index.blade.php file

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
        <h1 class="h2">Produtos</h1>
    </div>
    <div>
        <form action="" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome do produto">
            <button>Pesquisar</button>
            <a type="button" href="" class="btn btn-success float-right">Cadastrar</a>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($findProducts as $product)
                    <tr>
                        <th>{{ $product->ID }}</th>
                        <th>{{ $product->nome }}</th>
                        <th>{{ $product->valor }}</th>
                    </tr>
                @endforeach
            </tbody>
    </div>
@endsection
