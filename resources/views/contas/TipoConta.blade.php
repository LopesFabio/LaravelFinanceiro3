@extends('Painel.layout.index')

@section('content')
<section class="content">
    @include('Painel.layout.alerts')
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Contas</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Contas</a></li>
                                <li class="breadcrumb-item">Cadastro</li>
                                <li class="breadcrumb-item active">Tipo de Contas</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->

    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Cadastrar Tipos de Contas</p>

                <form action="{{route('tipocontas.store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Adcionar Tipo de Conta" id="tipo" name="tipo">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-plus"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
                            <a href="{{ url('/tipo-de-contas/excluir') }}" class="btn btn-danger btn-block btn-flat">Excluir</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection