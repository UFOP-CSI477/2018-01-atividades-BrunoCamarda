@extends('layout.principal')
@section('conteudo')
	<table class="table table-striped">
		<thead>
			<th> Id </th>
			<th> Nome </th>
			<th> Rua </th>
			<th> Nº  </th>
			<th> Bairro </th>
			<th> Cidade </th>
			<th> CEP </th>
			<th> Email </th>
			<th> Ações </th>
		</thead>
		<tbody>
		@foreach( $aluno as $a )
		<tr>
			<td>{{ $a->id }}</td>
			<td>{{ $a->nome }}</td>
			<td>{{ $a->rua }}</td>
			<td>{{ $a->numero }}</td>
			<td>{{ $a->bairro }}</td>
			<td>{{ $a->cidade->nome }}</td>
			<td>{{ $a->cep }}</td>
			<td>{{ $a->email }}</td>
			<td><a href="/alunos/{{ $a->id }}"><button class="btn btn-info btn-xs">Editar</button></a></td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br><br>
	<a href="{{route('alunos.create')}}">Inserir Aluno</a>
@endsection('conteudo')
