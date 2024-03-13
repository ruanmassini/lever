@extends('adminlte::page')

@section('title', 'SIGA CLONE')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-10 d-flex flex-row">
                    <h1 class="m-0 align-self-center">Cadastrar Usuário</h1>
                </div>
            </div>
        </div>
    </section>

    <div class='card'>
        <div class='card-header'>
            <h3 class='card-title'>Pesquisar</h3>
        </div>
        <div class='card-body'>
            <form method="POST" action="{{ route('user.create') }}">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nome Completo<span style="color: red;">*</span></label>
                            <input required type="text" name="name" class="form-control" placeholder="Digite o nome">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email<span style="color: red;">*</span></label>
                            <input required type="email" name="email" class="form-control" placeholder="Digite o email">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="senha">Senha<span style="color: red;">*</span></label>
                            <input required type="password" name="senha" class="form-control"
                                placeholder="Digite a senha">
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
