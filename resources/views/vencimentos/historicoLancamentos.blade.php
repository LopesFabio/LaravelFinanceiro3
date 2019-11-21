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
                            <h1 class="m-0 text-dark">Vencimentos</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Vencimentos</a></li>
                                <li class="breadcrumb-item active">Históricos</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Histórico de Vencimentos</h3>

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
                                        <th>Descrição</th>
                                        <th>Tipo</th>
                                        <th>Vencimento</th>
                                        <th>Valor</th>
                                        <th>Conta</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lancamento as $lancamento)
                                        <tr>
                                            <td>{{ $lancamento->id }}</td>
                                            <td>{{ $lancamento->descricao }}</td>
                                            <td>
                                                @if($lancamento->tipo = 'credito')
                                                    <span class="badge bg-success{{$lancamento->tipo}}"></span>
                                                @else
                                                    <span class="badge bg-danger{{$lancamento->tipo}}"></span>
                                                @endif
                                            </td>
                                            <td>{{ $lancamento->vencimento }}</td>
                                            <td>{{ $lancamento->valor }}</td>
                                            <td>{{ $lancamento->conta_id }}</td>
                                            <td>{{ $lancamento->status }}</td>
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
            </div>
        </div>


    </section>
    {{-- /header Dashboard--}}
@endsection