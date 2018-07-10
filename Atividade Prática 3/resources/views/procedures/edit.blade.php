@extends('layout.principal')
@section('conteudo')
<br><br><br><br>
	<table class="table table-striped">
		<thead>
			<th> Id </th>
			<th> Nome </th>
			<th> Preço </th>
			<th> Ações </th>
		</thead>
		<tbody>
		@foreach( $procedures as $u )
		<tr>
			<td>{{ $u->id }}</td>
			<td>{{ $u->name}}
			<td>{{ $u->price }}</td>
			<td>
				<form action="{{route('procedures.destroy', $u->id)}}" method="post">
					<a href="{{route('procedures.show', $u->id)}}"><input type="button" class="btn btn-info btn-xs" value="Editar"></button></a>
					@csrf
					@method('DELETE')
					<input type="submit" class="btn btn-danger btn-xs" value="Excluir">
				</form>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br><br>
@endsection('conteudo')
