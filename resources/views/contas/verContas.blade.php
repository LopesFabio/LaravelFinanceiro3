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
                                <li class="breadcrumb-item active">Contas Cadastradas</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Responsive Hover Table</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Banco</th>
                                        <th>Tipo de Conta</th>
                                        <th>Número da Conta</th>
                                        <th>Descrição</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($conta as $conta)
                                    <tr>
                                        <td>{{$conta->id}}</td>
                                        <td>{{$conta->banco_id}}</td>
                                        <td>{{$conta->tipo_id}}</td>
                                        <td>{{$conta->conta}}</td>
                                        <td>{{$conta->descricao}}</td>
                                        <td>
                                            <a href="{{route('conta.edit', $conta->id)}}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>
                                            <a href="{{route('conta.show', $conta->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

    </section>
@endsection