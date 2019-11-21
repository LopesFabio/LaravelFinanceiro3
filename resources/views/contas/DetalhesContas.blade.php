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
                            <h1 class="m-0 text-dark">Informações da Conta</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Contas</li>
                                <li class="breadcrumb-item"><a href="{{ url('conta') }}">Todas as Contas</a></li>
                                <li class="breadcrumb-item" active>Detalhes</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->

                {{--content--}}
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <b>Banco: </b>{{$banco->banco}} <b> Agência: </b> {{$banco->agencia}}
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group" style="height: 180px">
                                                <p><b>Conta: </b> {{$conta->conta}}</p>
                                                <p><b>Descrição: </b> {{$conta->descricao}}</p>
                                                <p><b>Tipo: </b> {{$tipo->tipo}}</p>
                                                @if($conta->saldo < 0)
                                                    <p> <b>Saldo: </b> <span class="badge bg-danger">{{$conta->saldo}}</span></p>
                                                @else
                                                    <p> <b>Saldo: </b> R$ <span class="badge bg-success">{{number_format($conta->saldo, 2, ',', '.')}}</span></p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <br>
                <form action="{{ route('conta.destroy', $conta->id) }}" class="form-horizontal" method="post" style="display: inline-block">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Excluir" class="btn btn-outline-info">
                </form>
                <button class="btn btn-outline-info"><a href="{{url('/conta')}}">Cancelar</a></button>
                {{--/content--}}
            </div>
        </div>
    </section>
@endsection