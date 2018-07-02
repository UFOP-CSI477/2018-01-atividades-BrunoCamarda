@extends('layout.principal')

@section('conteudo')
<h1>Dados do Aluno</h1>
<p> Código: {{ $aluno->id }}</p>
<p> Nome: {{ $aluno->nome }}</p>
<p> Endereço: {{ $aluno->rua }} {{ $aluno->numero }}, {{ $aluno->numero }} - {{ $aluno->cep }}</p>
<p> Cidade: {{ $aluno->cidade->nome }}</p>
<p> Email: {{ $aluno->mail }}</p>

<a href="/alunos"><button class="btn btn-warning btn-xs">Voltar</button></a>
<a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
<form method="post" action="{{route('alunos.destroy', $aluno->id) }}">
<form method="post" onsubmit="return confirm('Deseja realmente excluir?')" action="{{ route('alunos.destroy', $aluno->id)}}">
	@csrf
	@method('DELETE')
	<input type="submit" value="Excluir">

</form>

@endsection('conteudo')
