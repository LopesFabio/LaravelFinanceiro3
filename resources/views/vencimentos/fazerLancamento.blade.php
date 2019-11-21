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
                            <h1 class="m-0 text-dark">Fazer Lançamento</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Vencimentos</a></li>
                                <li class="breadcrumb-item active">Lançar</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->

                @include('Painel.layout.alerts')
                <div class="login-box">
                    <div class="card">
                        <div class="card-body login-card-body">
                            <p class="login-box-msg">Fazer Lançamento</p>

                            <form action="{{route('lance.inserir')}}" method="POST">
                                {{ csrf_field() }}
                                <label>Valor:</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="R$00,00" id="valor" name="valor">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fa fa-comment-dollar"></span>
                                        </div>
                                    </div>
                                </div>
                                <label>Tipo de Lançamento</label>
                                <div class="input-group mb-3">
                                    <select class="form-control" name="tipolance" id="tipolance">
                                        <option value="">Tipo de Lançamento</option>
                                        <option value="credito">Crédito</option>
                                        <option value="debito">Débito</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-tag"></span>
                                        </div>
                                    </div>
                                </div>
                                <label>Conta</label>
                                <div class="input-group mb-3">
                                    <select class="form-control" name="conta" id="conta">
                                        <option selected>Selecione a Conta</option>
                                        @foreach($contas as $conta)
                                        <option value="{{$conta->id}}">{{$conta->conta}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-university"></span>
                                        </div>
                                    </div>
                                </div>
                                <label>Descrição:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Descrição..." id="descricao" name="descricao">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fa fa-comment"></span>
                                        </div>
                                    </div>
                                </div>
                                <label>Vencimento:</label>
                                <div class="input-group mb-3">
                                   <input type="date" class="form-control" id="vencimento" name="vencimento">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fa fa-calendar"></span>
                                        </div>
                                    </div>
                                </div>
                                <label>Status:</label>
                                <div class="input-group mb-3">
                                    <select class="form-control" id="status" name="status">
                                        <option selected>Status</option>
                                        <option value="pagar">À Pagar</option>
                                        <option value="receber">À Receber</option>
                                        <option value="atrasos">Em Atraso</option>
                                        <option value="pago">Pago</option>
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fa fa-check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary">Lançar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
