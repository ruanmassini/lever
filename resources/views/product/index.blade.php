@extends('adminlte::page')

@section('title', 'SIGA CLONE')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-10 d-flex flex-row">
                    <h1 class="m-0 align-self-center">Clientes</h1>
                </div>
                <div class="col-md-2 d-flex justify-content-end">
                    <a href="" data-toggle="tooltip" title="" class="btn btn-lg btn-primary"
                        data-original-title="Cadastrar">
                        <i class="fas fa-plus"></i>
                        Cadastrar
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class='card'>
        <div class='card-header'>
            <h3 class='card-title'>Pesquisar</h3>
        </div>
        <div class='card-body'>
            <form method="GET">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="buscar" id="nome"class="form-control"
                                placeholder="Digite o nome">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="valor">Valor</label>
                            <input type="number" name="valor" step="0.01" class="form-control" placeholder="00.00">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="select">Select aleatório</label>
                            <select id="select" name="select" class="form-control">
                                <option>Selecione um item</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right">
                    Buscar
                </button>
            </form>
        </div>
    </div>
    <div class='card'>
        <div class='card-header'>
            <h3 class='card-title'>Registros</h3>
        </div>
        <div class='card-body'>
            <div class='table-responsive'>
                <table class='table table-bordered table-hover'>
                    <tr>
                        <th style="width: 2px">ID</th>
                        <th class='text-center align-middle'>Nome</th>
                        <th class='text-center align-middle'>Valor</th>
                    </tr>
                    @foreach ($findProducts as $product)
                        <tr>
                            <th>{{ $product->id }}</th>
                            <th>{{ $product->nome }}</th>
                            <th>{{ $product->valor }}</th>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop
