@extends('adminlte::page')

@section('title', 'SIGA CLONE')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-10 d-flex flex-row">
                    <h1 class="m-0 align-self-center">Editar Cliente</h1>
                </div>
            </div>
        </div>
    </section>

    <div class='card'>
        <div class='card-header'>
            <h3 class='card-title'>Pesquisar</h3>
        </div>
        <div class='card-body'>
            <form method="POST" action="{{ route('cliente.update', $product->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" value="{{ $product->nome }}"
                                placeholder="Digite o nome">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="valor">Valor</label>
                            <input type="number" name="valor" step='0.01' class="form-control"
                                value="{{ $product->valor }}" placeholder="00.00">
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
                    Atualizar
                </button>
            </form>
        </div>
    </div>
@stop
