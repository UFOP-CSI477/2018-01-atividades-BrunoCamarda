@extends('layout.principal')

@section('conteudo')
<h1>Dados do Estado</h1>
<p> Código: {{ $estado->id }}</p>
<p> Nome: {{ $estado->nome }}</p>
<p> Sigla: {{ $estado->sigla }}</p>

<a href="/estados"><button class="btn btn-warning btn-xs">Voltar</button></a>
<a href="{{ route('estados.edit', $estado->id) }}">Editar</a>
<form method="post" action="{{route('estados.destroy', $estado->id) }}">
<form method="post" onsubmit="return confirm('Deseja realmente excluir?')" action="{{ route('estados.destroy', $estado->id)}}">
	@csrf
	@method('DELETE')
	<input type="submit" value="Excluir">

</form>

@endsection('conteudo')
