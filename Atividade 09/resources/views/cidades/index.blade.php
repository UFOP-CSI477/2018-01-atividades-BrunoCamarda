@extends('layout.principal')
@section('conteudo')
	<table class="table table-striped">
		<thead>
			<th> Id </th>
			<th> Nome </th>
			<th> Estado </th>
			<th> Ações </th>
		</thead>
		<tbody>
		@foreach( $cidades as $e )
		<tr>
			<td>{{ $e->id }}</td>
			<td>{{ $e->nome }}</td>
			<td>{{ $e->estado->nome }} - {{ $e->estado->sigla }}</td>
			<td><a href="/cidades/{{ $e->id }}"><button class="btn btn-info btn-xs">Editar</button></a></td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br><br>
	<a href="{{route('cidades.create')}}">Inserir Cidade</a>
@endsection('conteudo')
