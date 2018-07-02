@extends('layout.principal')
@section('conteudo')
	<h1> Editar Estado {{$estado->id}}</h1>
	<br><br>
	<form method="post" action="{{route('estados.update', ['estado' => $estado->id])}}">
		@csrf
		@method('PATCH')

		<label for="nome">Nome:
		<input type="text" name="nome" required="" value="{{$estado->nome}}">

		<br>
		<label for="sigla">Sigla:
		<input type="text" name="sigla" required="" value="{{$estado->sigla}}">

		<br><br>
		<input type="submit" name="btnEditar" value="Editar">
	</form>

@endsection('conteudo')