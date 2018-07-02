<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema Acadêmico</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<!-- Flash: mensagem //-->
	@if ( Session::has('mensagem'))
		<p class="alert alert-info"> {{ Session::get('mensagem') }} </p>
	@endif

	<!-- Links -->
	<a href="/estados">Estados </a>
	<a href="/cidades">Cidades </a>
	<a href="/alunos">Alunos </a>
	<a href="#">Turmas </a>
	<a href="#">Notas </a>

	<!-- Conteúdo -->
	@yield('conteudo')

</body>
</html>
