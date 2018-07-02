@extends('layout.principal')

@section('conteudo')
<h1>Dados do Estado</h1>
<p> Código: {{ $cidade->id }}</p>
<p> Nome: {{ $cidade->nome }}</p>
<p> Estado: {{ $cidade->estado->nome }}</p>

<a href="/cidades"><button class="btn btn-warning btn-xs">Voltar</button></a>
<a href="{{ route('cidades.edit', $cidade->id) }}">Editar</a>
<form method="post" action="{{route('cidades.destroy', $cidade->id) }}">
<form method="post" onsubmit="return confirm('Deseja realmente excluir?')" action="{{ route('cidades.destroy', $cidade->id)}}">
	@csrf
	@method('DELETE')
	<input type="submit" value="Excluir">

</form>

@endsection('conteudo')
