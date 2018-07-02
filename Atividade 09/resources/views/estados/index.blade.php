@extends('layout.principal')
@section('conteudo')
	<table class="table table-striped"> 
		<thead>
			<th> Id </th>
			<th> Nome </th>
			<th> Sigla </th>
			<th> Ações </th>
		</thead>
		<tbody>
		@foreach( $estados as $e )
		<tr>
			<td>{{ $e->id }}</td> 
			<td>{{ $e->nome }}</td>
			<td>{{ $e->sigla }}</td>
			<td><a href="/estados/{{ $e->id }}"><button class="btn btn-info btn-xs">Editar</button></a></td>
		</tr>
		@endforeach 
		</tbody>
	</table>
	<br><br>
	<a href="{{route('estados.create')}}">Inserir Estados</a>
@endsection('conteudo')
