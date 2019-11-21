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
                                <li class="breadcrumb-item">Informações de Banco</li>
                                <li class="breadcrumb-item active">Excluir Banco</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->

        <h1>
            <a href="#">Exclur: </a>Conta: {{$banco->id}}
        </h1>

        <p><b>ID: </b>{{$banco->id}}</p>
        <p><b>Banco: </b>{{$banco->banco}}</p>
        <p><b>Descrição: </b>{{$banco->descricao}}</p>
        <p><b>Agência: </b>{{$banco->agencia}}</p>
        <p><b><a href="{{asset('/contas/todas')}}">Contas Neste Banco:</a></b></p>

        <hr>
            @include('Painel.layout.alerts')
        <form action="{{ route('banco.destroy', $banco->id) }}" class="form-horizontal" method="post" style="display: inline-block">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Excluir" class="btn btn-outline-info">
        </form>
        <button class="btn btn-outline-info"><a href="{{url('/banco')}}">Cancelar</a></button>

    </section>
@endsection
