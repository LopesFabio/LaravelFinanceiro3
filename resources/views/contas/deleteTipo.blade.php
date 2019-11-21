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

                {{--content--}}
                <h1>Tipo de Contas</h1>
                <br>
                <div class="form-inline">
                    <select class="form-inline">
                        <option value="">Contas</option>
                        @foreach($tipos as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <form action="{{ route('tipocontas.destroy', $tipo->id) }}" class="form-horizontal" method="post" style="display: inline-block">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Excluir" class="btn btn-outline-info">
                </form>
                {{--/content--}}
            </div>
        </div>
    </section>
@endsection