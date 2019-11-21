<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route('home.index')}}" class="brand-link">
        <img src="{{ asset('AdminLTE/dist/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"> Financeiro 3K </span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('home.index')}}" class="nav-link">
                        <p>
                            Bem Vindo! {{auth()->user()->name}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('profile')}}" class="nav-link">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <p>
                            Perfil
                        </p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-power-off"></i> Sair
                    </a>
                </li>


                <font color="white"><hr></font>

                <li class="nav-item">
                    <a href="{{route('home.index')}}" class="nav-link">
                        <i class="fa fa-home"></i>
                        <p>
                            Página Inicial
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-university"></i>
                        <p>
                            Bancos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/cadastrar')}}" class="nav-link">
                                <p>Cadastrar Bancos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/banco')}}" class="nav-link">
                                <p>Ver Bancos Cadastrados</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                        <p>
                             Contas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('cadconta')}}" class="nav-link">
                                <p>Cadastrar Conta</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('todas.contas')}}" class="nav-link">
                                <p>Ver Contas Cadastrados</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('tipo.conta')}}" class="nav-link">
                                <p>Cadastrar Tipo de Conta</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-calculator" aria-hidden="true"></i>
                        <p>
                            Vencimentos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('vencimentos.lancar')}}" class="nav-link">
                                <p>Fazer Lançamento</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('vencimentos.receber')}}" class="nav-link">
                                <p>Vencimentos à Receber</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('vencimentos.pagar')}}" class="nav-link">
                                <p>Vencimentos à Pagar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('vencimentos.historico')}}" class="nav-link">
                                <p>Histórico de Lançamentos</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>