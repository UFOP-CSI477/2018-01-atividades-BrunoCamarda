@extends('layout.principal')
@section('conteudo')
<center>
<h1>Dados do Procedimento</h1>
<br>
<form method="post" action="{{route('procedures.update', $procedure->id)}}">
	@csrf
	@method('PATCH')

	<label for="id"><strong>Código:</strong> {{$procedure->id}}

	<br>
	<label for="sigla"><strong>Nome:</strong>
	<input type="text" name="name" required="" value="{{$procedure->name}}">

	<br>
	<label for="id"><strong>Preço:</strong>
	<input type="number" name="price" required="" value="{{$procedure->price}}">

	<br><br>
	<input type="submit" class="btn btn-sucess btn-xs" name="btnEditar" class="btn btn-sucess btn-xs" value="Editar"></input>
	<br><br>
	<a href="{{route('procedures.editar')}}"><input type="buttom" class="btn btn-warning btn-xs" value="Voltar"></input></a>
</form>


@endsection('conteudo')
