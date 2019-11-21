@extends('Painel.layout.index')

@section('content')
    <!-- Main content -->
    <section class="content">
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
                                <li class="breadcrumb-item active">Cadastrar Conta</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->

        @include('Painel.layout.alerts')
        <div class="login-box">
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">{{ $botao }} uma nova conta</p>

                    <form action="{{route('conta.store')}}" method="POST">
                        {{ csrf_field() }}
                        <label>Banco:</label>
                        <div class="input-group mb-3">
                            <select class="form-control" name="banco" id="banco">
                                <option value="" >Selecione o Banco</option>
                                @foreach($banco as $banco)
                                    <option value="{{$banco->id}}">{{ $banco->id }} - {{$banco->banco}}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-university"></span>
                                </div>
                            </div>
                        </div>
                        <label>Número da Conta</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="0000-00" id="conta" name="conta">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <label>Tipo da Conta</label>
                        <div class="input-group mb-3">
                            <select class="form-control" name="tipo" id="tipo">
                                <option value="">Selecione o Tipo de Conta</option>
                                @foreach($tipo as $tipo)
                                    <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <label>Descrição</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Descrição..." id="descricao" name="descricao">
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary">{{ $botao }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
