@extends('adminlte::page')

@section('title', 'SIGA CLONE')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-10 d-flex flex-row">
                    <h1 class="m-0 align-self-center">Cadastrar Cliente</h1>
                </div>
            </div>
        </div>
    </section>

    <div class='card'>
        <div class='card-header'>
            <h3 class='card-title'>Pesquisar</h3>
        </div>
        <div class='card-body'>
            <form method="POST" action="{{ route('cliente.create') }}">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome">Nome <span style="color: red;">*</span></label>
                            <input required type="text" name="nome" class="form-control" placeholder="Digite o nome">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tipo_pessoa">Tipo de Pessoa <span style="color: red;">*</span></label>
                            <select required id="tipo_pessoa" name="tipo_pessoa" class="form-control">
                                <option value="pf">Pessoa Física (CPF)</option>
                                <option value="pj">Pessoa Jurídica (CNPJ)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cpf_cnpj">CPF/CNPJ <span style="color: red;">*</span></label>
                            <input required type="number" name="cpf_cnpj" class="form-control"
                                placeholder="Digite o CPF ou CNPJ">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="cidade">Cidade <span style="color: red;">*</span></label>
                            <input required type="text" name="cidade" class="form-control"
                                placeholder="Digite a cidade">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right">
                    Cadastrar
                </button>
            </form>
        </div>
    </div>
@stop
