@extends('layout.principal')
@section('conteudo')
<center>
<h1>Dados do Exame</h1>
<br>
<form method="post" action="{{route('tests.update', $test->id)}}">
	@csrf
	@method('PATCH')

	<label for="id"><strong>Código:</strong> {{$test->id}}

	<br>
	<label for="sigla"><strong>Data:</strong>
	<input type="date" name="date" required="" value="{{$test->date}}">

	<br>
	<label for="procedureId"><strong>Procedimento:</strong>
	<select name="procedureId">
          <option value="{{$test->procedure_id}}">{{$test->procedure->name}}</option>
          <!-- Dados dos estados //-->
          @foreach($procedures as $e)
            <option value="{{ $e->id }}"
                @if ( $e->id == $test->procedure_id )
                    selected
                @endif
              >{{ $e->name }}</option>
          @endforeach
        </select>

	<br>
	<label for="id"><strong>Preço:</strong> {{$test->procedure->price}}

	<br><br>
	<input type="submit" name="btnEditar" class="btn btn-sucess btn-xs" value="Editar">
</form>

<br><br>
<a href="/tests"><button class="btn btn-warning btn-xs">Voltar</button></a>

@endsection('conteudo')
