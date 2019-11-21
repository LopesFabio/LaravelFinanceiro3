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
                                <li class="breadcrumb-item active">Bancos Cadastrados</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bancos Cadastrados</h3>

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
                                <th>Agência</th>
                                <th>Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banks as $banco)
                            <tr>
                                <td>{{$banco->id}}</td>
                                <td>{{$banco->banco}}</td>
                                <td>{{$banco->agencia}}</td>
                                <td><button class="btn btn-outline-info"><a href="{{route('banco.edit', $banco->id)}}"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a></button>
                                    <button class="btn btn-outline-info"><a href="{{route('banco.show', $banco->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></button></td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                    {{ $banks->links() }}
                </div>

            </div>
        </div>
    </section>
@endsection
