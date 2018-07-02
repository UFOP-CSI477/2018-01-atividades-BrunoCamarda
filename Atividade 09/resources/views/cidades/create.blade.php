
@extends('layout.principal')
@section('conteudo')
	<h1> Inserir Cidade </h1>
	<br><br>
	<form method="post" action="{{route('cidades.store')}}">
		@csrf

		<label for="nome">Nome:
		<input type="text" name="nome" required="">

		<br>
		<label for="estado_id">Estado:
		<select name="estado_id" required="">
			<option value="0"> SELECIONE </option> 
			@foreach ($estados as $e)
			<option value="{{ $e->id}}">{{ $e->nome}}</option>
			@endforeach
			
		</select>

		<br><br>
		<input type="submit" name="btnIncluir" value="Incluir">
	</form>

@endsection('conteudo')