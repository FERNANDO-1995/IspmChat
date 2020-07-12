<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nome do Site | ISPM </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/meanmenu/meanmenu.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/notika-custom-icon.css')}}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/wave/waves.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <style>
        .logout{
            color: rgb(29, 29, 29);
            font-size: 16px;
        }
        
    </style>
</head>

<body>
    <div class="remendar" >

    </div>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="{{ route('inicio') }}"><img src="{{ asset('img/logo/logo.png') }}" alt="" style="width: 50px" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            @if (Auth::user()->categoria =="Estudante")
                                <li class="nav-item dropdown">
                                    <!--<div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>3</span></div>-->
                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="fa fa-briefcase"></i></span></a>
                                    <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                        <div class="hd-mg-tt">
                                            <h2>Mochila do Estudante</h2>
                                        </div>
                                        <div class="hd-message-info" style="padding: 5px">
                                            <ul>
                                                @if(Auth::user()->categoria == "Estudante")
                                                    @foreach (App\TurmaProfDisc::where('turma_id',Auth::user()->estudante->turma_id)->get() as $it)
                                                        @foreach (App\Publicacao::where('turma_prof_disc_id',$it->id)->orderBy('id','DESC')->limit(6)->get() as $item)
                                                            @foreach ($item->arquivo as $aqui)
                                                                <li class="">
                                                                    <a href="{{ asset('assets/arquivos/'.$aqui->file) }}" download="{{$aqui->file}}"   title="Baixar" style="font-size: 12px">{{$aqui->file}}</a>
                                                                    <p class="card-text"><small class="text-muted">Publicado {{Carbon\Carbon::parse($aqui->created_at)->locale('pt-pt')->diffForHumans()}}</small></p>
                                                                </li> <br> 
                                                            @endforeach
                                                        @endforeach
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @endif
                            <!--Fim da Mochila-->
                            <li class="nav-item dropdown" style="margin-left: 10px">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-mail"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Mensagem</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <!--Fim da Mensagem-->
                            <li class="nav-item dropdown" style="margin-left: 10px">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-alarm"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Publicações</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <!--FIm da Notificações -->
                            <li class="nav-item" style="margin-left: 10px"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-support"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>{{ Auth::user()->name }}</h2>
                                    </div>
                                    <div class="text-left " style="padding-left: 10px;">
                                        <h6>Email: <span>{{ Auth::user()->email }}</span></h6>
                                        <h6>Categoria: <span>{{ Auth::user()->categoria }}</span></h6>
                                        @if(Auth::user()->id_dep != NULL)
                                         <h6>Depart: <span>{{ Auth::user()->departamento->nome }}</span> </h6>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item" >
                                <a class="logout" href="#Sair" data-toggle="modal" >
                                    <span><i class="fa fa-power-off"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                            @if (Auth::user()->categoria != "Professor" && Auth::user()->categoria !="Estudante" )
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Cadastros</a>
                            @endif
                                    <ul class="collapse dropdown-header-top">
                                        @if (Auth::user()->categoria =="Admin" || Auth::user()->categoria =="Gestor" )
                                            <li><a href="{{url('cadastrardeptmento')}}">Departamento</a>
                                            </li>
                                            <li><a href="{{ route('usuario.index') }}">Usuários</a>
                                            </li>
                                            <li><a href="{{ route('professor.index') }}">Professores</a>
                                            </li>
                                            <li><a href="{{route('estudante.index')}}">Estudantes</a>
                                            </li>
                                            <li><a href="{{ route('disciplina.index') }}">Disciplinas</a>
                                            </li>
                                        @endif
                                        @if (Auth::user()->categoria =="Coordenador" || Auth::user()->categoria =="Chefe de Departamento" )
                                            <li><a href="{{ route('curso.index') }}">Cursos</a>
                                            </li>
                                            <li><a href="{{ route('professor.index') }}">Professores</a>
                                            </li>
                                        @endif
                                        @if (Auth::user()->categoria =="Chefe de Departamento" )
                                            <li><a href="{{ route('usuario.index') }}">Usuários</a>
                                            </li>
                                        @endif
                                
                                    </ul>
                                </li>
                            @if (Auth::user()->categoria == "Professor" || Auth::user()->categoria =="Estudante" )
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Interação</a>
                            @endif
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        @if (Auth::user()->categoria =="Professor" || Auth::user()->categoria =="Estudante" )
                                            <li><a href="{{ route('publicacao.index') }}">Forúm</a>
                                            </li>
                                            <li><a href="{{ route('publicacao.index') }}">Turma</a>
                                            </li>
                                            <li><a href="{{route('mensagem.index')}}">Conversas Particular</a>
                                            </li>
                                        @endif
                                        @if (Auth::user()->categoria =="Estudante" )
                                            <li><a href="#Mochila" data-toggle="modal" >Mochila</a>
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Perfil</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        @if (Auth::user()->categoria =="Professor" || Auth::user()->categoria =="Estudante" )
                                            <li><a href="{{ route('publicacao.index') }}">Forúm</a>
                                            </li>
                                            <li><a href="{{route('mensagem.index')}}">Conversas Particular</a>
                                            </li>
                                        @endif
                                        @if (Auth::user()->categoria =="Estudante" )
                                            <li><a href="#Mochila" data-toggle="modal" >Mochila</a>
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Ajuda</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Sobre a Aplicação</a>
                                        </li>
                                        <li><a href="form-components.html">Manual de Utilização</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a href="{{ route('inicio') }}" style="cursor: pointer"><i class="notika-icon notika-house"></i> Inicio</a>
                        </li>
                        @if (Auth::user()->categoria != "Professor" && Auth::user()->categoria !="Estudante" )
                            <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-edit"></i> Cadastros</a>
                            </li>
                        @endif
                        <!--<li><a data-toggle="tab" href="#CadastroAdd"><i class="notika-icon notika-search"></i>Consultas</a>
                        </li>-->
                        @if (Auth::user()->categoria == "Professor" || Auth::user()->categoria =="Estudante" )
                            <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-chat"></i> Interação</a>
                            </li>
                        @endif
                        <li><a  href="{{route('usuario.create')}}"> <i class="notika-icon notika-support"></i> Perfil</a>
                        </li>
                        <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-eye"></i> Ajuda</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                @if (Auth::user()->categoria =="Admin" || Auth::user()->categoria =="Gestor" )
                                    <li><a href="{{url('cadastrardeptmento')}}">Departamento</a>
                                    </li>
                                    <li><a href="{{ route('usuario.index') }}">Usuários</a>
                                    </li>
                                    <li><a href="{{ route('professor.index') }}">Professores</a>
                                    </li>
                                    <li><a href="{{route('estudante.index')}}">Estudantes</a>
                                    </li>
                                    <li><a href="{{ route('disciplina.index') }}">Disciplinas</a>
                                    </li>
                                @endif
                                @if (Auth::user()->categoria =="Coordenador" || Auth::user()->categoria =="Chefe de Departamento" )
                                    <li><a href="{{ route('curso.index') }}">Cursos</a>
                                    </li>
                                    <li><a href="{{ route('professor.index') }}">Professores</a>
                                    </li>
                                @endif
                                @if (Auth::user()->categoria =="Chefe de Departamento" )
                                    <li><a href="{{ route('usuario.index') }}">Usuários</a>
                                    </li>
                                @endif
                                
                            </ul>
                        </div>
                         <div id="CadastroAdd" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                            @if (Auth::user()->categoria =="Professor" || Auth::user()->categoria =="Estudante" )
                                <li><a href="{{ route('publicacao.index') }}">Forúm</a>
                                </li>
                                <li><a href="{{route('mensagem.index')}}">Conversas Particular</a>
                                </li>
                            @endif
                            @if (Auth::user()->categoria =="Estudante" )
                                <li><a href="#Mochila" data-toggle="modal" >Mochila</a>
                                </li>
                            @endif
                            </ul>
                        </div>
                        
                        
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="form-elements.html">Sobre a Aplicação</a>
                                </li>
                                <li><a href="form-components.html">Manual de Utilização</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
        @yield('ispm')
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
    @include('page.mochila.lista')
    @include('page.sair')

    
    <div class="footer-copyright-area" style="background:#0bacf7 !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2020 
. Todos os direitos reservados.  <a href="">ISPM</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('js/jquery-price-slider.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('js/meanmenu/jquery.meanmenu.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="{{asset('js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('js/jvectormap/jvectormap-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/sparkline/sparkline-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('js/flot/curvedLines.js')}}"></script>
    <script src="{{asset('js/flot/flot-active.js')}}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{asset('js/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('js/knob/jquery.appear.js')}}"></script>
    <script src="{{asset('js/knob/knob-active.js')}}"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{asset('js/wave/waves.min.js')}}"></script>
    <script src="{{asset('js/wave/wave-active.js')}}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{asset('js/todo/jquery.todo.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('js/plugins.js')}}"></script>
	<!--  Chat JS
		============================================ -->
    <script src="{{asset('js/chat/moment.min.js')}}"></script>
   <!-- <script src="{{asset('js/chat/jquery.chat.js')}}"></script>
     main JS
		============================================ -->
    <script src="{{asset('js/main.js')}}"></script>
	<!-- tawk chat JS============================================ -->
    <script src="{{asset('js/data-table/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/data-table/data-table-act.js')}}"></script>

    @stack('js')
    @stack('jq')
    
    @stack('coment')
</body>

</html>