@extends('layout.principal')
@section('conteudo')
	<h1> Editar Cidade {{$cidade->id}}</h1>
	<br><br>
	<form method="post" action="{{route('cidades.update', $cidade->id)}}">
		@csrf
		@method('PATCH')

		<label for="nome">Nome:
		<input type="text" name="nome" required="" value="{{$cidade->nome}}">

		<br>
		<select name="estado_id">
	          <option value="">Selecione:</option>
	          <!-- Dados dos estados //-->
	          @foreach($estado as $e)
	            <option value="{{ $e->id }}"
	                @if ( $e->id == $cidade->estado_id )
	                    selected
	                @endif
	              >{{ $e->nome }}-{{ $e->sigla }}</option>
	          @endforeach
	  </select>

		<br><br>
		<input type="submit" name="btnEditar" value="Editar">
	</form>

@endsection('conteudo')
