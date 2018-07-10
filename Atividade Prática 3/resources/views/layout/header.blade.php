<!DOCTYPE html>
<html>
  <head>
	  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
      <script src="{{ asset('js/app.js') }}" defer></script>

  </head>
  <body>
    <?php if(!isset ($_SESSION) == true){
    session_start();
    }
    ?>
    <!-- Links //-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">Analyses</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Área Paciente</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('tests.create')}}">Marcar Exames</a>
                  <a class="dropdown-item" href="{{route('tests.index')}}">Histórico de Marcações</a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Área Geral</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('procedures.index')}}">Lista de Procedimentos</a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Área Administrativa</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('procedures.editar')}}">Editar Procedimentos - Operário</a>
                  <a class="dropdown-item" href="{{route('procedures.create')}}">Cadastro de Procedimentos</a>
                  <a class="dropdown-item" href="{{route('procedures.editar')}}">Editar Procedimentos - Administrador</a>
                  <a class="dropdown-item" href="{{route('tests.relatorioCliente')}}">Relatórios Exames por Cliente</a>
                  <a class="dropdown-item" href="{{route('tests.relatorioProcedimento')}}">Relatórios Exames por Procedimento</a>
                </div>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

  </body>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		@yield('conteudo')
</html>
