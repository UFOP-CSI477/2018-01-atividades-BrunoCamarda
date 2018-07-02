@extends('layout.principal')
@section('conteudo')
	<h1> Editar Aluno {{$aluno->id}}</h1>
	<br><br>
	<form method="post" action="{{route('alunos.update', $aluno->id)}}">
		@csrf
		@method('PATCH')

		<label for="nome">Nome:
		<input type="text" name="nome" value="{{$aluno->nome}}"></input>

		<br>
		<label for="rua">Rua:
		<input type="text" name="rua" value="{{$aluno->rua}}">

		<br>
		<label for="numero">Numero:
		<input type="number" name="numero" value="{{$aluno->numero}}">

		<br>
		<label for="bairro">Bairro:
		<input type="text" name="bairro" value="{{$aluno->bairro}}">

		<br>
		<label for="cidade_id">Cidade:
		<select name="cidade_id">
	          <option value="">Selecione:</option>
	          <!-- Dados dos estados //-->
	          @foreach($cidades as $e)
	            <option value="{{ $e->id }}"
	                @if ( $e->id == $aluno->cidade_id )
	                    selected
	                @endif
	              >{{ $e->nome }}</option>
	          @endforeach
	  </select>

		<br>
		<label for="cep">CEP:
		<input type="text" name="cep" value="{{$aluno->cep}}">

		<br>
		<label for="mail">Email:
		<input type="text" name="mail" value="{{$aluno->mail}}">


		<br><br>
		<input type="submit" name="btnEditar" value="Editar">
	</form>

@endsection('conteudo')
