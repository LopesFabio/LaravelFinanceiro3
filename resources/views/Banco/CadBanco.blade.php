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
                            <h1 class="m-0 text-dark">Banco</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Banco</a></li>
                                <li class="breadcrumb-item active">Cadastro</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->

        @include('Painel.layout.alerts')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{$botao}} Banco</h3>
            </div>
            @if(isset($banco))
                <form method="POST" action="{{route('banco.update', $banco->id)}}">
                    {!! method_field('PUT') !!}
            @else
                <form method="POST" action="{{route('cadastrar')}}">
            @endif
                {!! csrf_field() !!}
                <div class="card-body">
                    <div class="form-group">
                        <label>Nome do Banco</label>
                        <input type="text"  name="banco" placeholder="Nome do Banco"class="form-control" value="{{$banco->banco or old('Banco')}}">
                    </div>
                    <div class="form-group">
                        <label>Agência</label>
                        <input type="text" name="agencia" class="form-control" placeholder="Agência" value="{{$banco->agencia or old('Agência')}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{$botao}}</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
