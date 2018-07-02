@extends('layout.principal')
@section('conteudo')
	<h1> Inserir Estado </h1>
	<br><br>
	<form method="post" action="{{route('estados.store')}}">
		@csrf

		<label for="nome">Nome:
		<input type="text" name="nome" required="">

		<br>
		<label for="sigla">Sigla:
		<input type="text" name="sigla" required="">

		<br><br>
		<input type="submit" name="btnIncluir" value="Incluir">
	</form>

@endsection('conteudo')