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
        <div class="col-md-3">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{asset('AdminLTE/dist/img/perfil/avatar04.png')}}" alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>
                    <p class="text-muted text-center">{{auth()->user()->acl}}</p>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Menbro desde: </b> <a class="float-right">{{auth()->user()->created_at->diffForHumans()}}</a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-block"><b>Editar</b></a>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Sobre</h3>
                </div>
                <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Formação</strong>

                    <p class="text-muted">
                        {{auth()->user()->formacao}}
                    </p>

                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                    <p class="text-muted">{{auth()->user()->localidade}}</p>

                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Conhecimento</strong>

                    <p class="text-muted">
                        <span class="tag tag-danger">{{auth()->user()->conhecimento}}</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection