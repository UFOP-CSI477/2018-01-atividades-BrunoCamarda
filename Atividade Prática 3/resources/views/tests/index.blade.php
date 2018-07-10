@extends('layout.principal')
@section('conteudo')
	<br><br><center><h3> Exames Marcados </h3><br><br>
	<table class="table table-striped">
		<thead>
			<th> Procedure </th>
			<th> Data </th>
			<th> Preço </th>
			<th> Ações </th>
		</thead>
		<tbody>
		@php
		$soma = 0.00
		@endphp
		@foreach( $tests as $t )
		<tr>
			<td>{{ $t->procedure->name }}</td>
			<td>{{ $t->date }}</td>
			<td>${{ $t->procedure->price }}</td>
			@php
			$soma = $soma + $t->procedure->price
			@endphp
			<td>
				<form action="{{route('tests.destroy', $t->id)}}" method="post">
					<a href="{{route('tests.show', $t->id)}}"><input type="button" class="btn btn-info btn-xs" value="Editar"></button></a>
					@csrf
					@method('DELETE')
					<input type="submit" class="btn btn-danger btn-xs" value="Desmarcar"></button></a>
				</form>
			</td>
		</tr>
		@endforeach
		<tr>
			<td colspan="2">TOTAL</td>
			<td>${{$soma}}
		</tr>
		</tbody>
	</table>
	<br><br>
@endsection('conteudo')
