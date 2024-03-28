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
                    <a href="{{ route('cliente.create') }}" data-toggle="tooltip" title="" class="btn btn-lg btn-primary"
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
                        <th style='width: 2px' class='text-center align-middle'>ID</th>
                        <th class='text-center align-middle col-3'>Nome</th>
                        <th class='text-center align-middle col-2'>CPF/CNPJ</th>
                        <th class='text-center align-middle col-2'>Tipo de pesssoa</th>
                        <th class='text-center align-middle col-2'>Cidade</th>
                        <th class='text-center align-middle col-2'>Data de Criação</th>
                        <th class='text-center align-middle col-1'>Ações</th>
                    </tr>
                    @foreach ($findCliente as $cliente)
                        <tr>
                            <th class='text-center align-middle'>{{ $cliente->id }}</th>
                            <th class='text-center align-middle'>{{ $cliente->nome }}</th>
                            <th class='text-center align-middle'>{{ $cliente->cpf_cnpj }}</th>
                            <th class='text-center align-middle'>{{ $cliente->tipo_pessoa }}</th>
                            <th class='text-center align-middle'>{{ $cliente->cidade }}</th>
                            <th class='text-center align-middle'>{{ $cliente->created_at }}</th>
                            <th class='text-center align-middle'>
                                <div class="row justify-content-center">
                                    <div class="col-sm">
                                        <a href="{{ route('cliente.update', $cliente->id) }}" data-toggle="tooltip"
                                            title="" class="btn btn-sm btn-outline-success mr-1 ml-1"
                                            data-original-title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div>

                                    <div class="col-sm">
                                        <form action="{{ route('cliente.delete', $cliente->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" data-toggle="tooltip" title=""
                                                class="btn btn-sm btn-outline-danger btn-excluir mr-1 ml-1"
                                                data-original-title="Excluir">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </table>
                {{ $findCliente->links() }}
            </div>
        </div>
    </div>
@stop
