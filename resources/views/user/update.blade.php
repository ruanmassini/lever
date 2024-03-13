@extends('adminlte::page')

@section('title', 'SIGA CLONE')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-10 d-flex flex-row">
                    <h1 class="m-0 align-self-center">Editar User</h1>
                </div>
            </div>
        </div>
    </section>

    <div class='card'>
        <div class='card-header'>
            <h3 class='card-title'>Pesquisar</h3>
        </div>
        <div class='card-body'>
            <form method="POST" action="{{ route('user.update', $user->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}"
                                placeholder="Digite o name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" step='0.01' class="form-control"
                                value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" name="password" step='0.01' class="form-control">
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
