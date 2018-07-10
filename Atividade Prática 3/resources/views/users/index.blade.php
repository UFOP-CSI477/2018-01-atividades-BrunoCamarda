@extends('layout.principal')
@section('conteudo')
<br><br><br><br>
	<table class="table table-striped">
		<thead>
			<th> Id </th>
			<th> Senha </th>
			<th> Nome </th>
			<th> Tipo </th>
		</thead>
		<tbody>
		@foreach( $user as $u )
		<tr>
			<td>{{ $u->id }}</td>
			<td>{{ $u->password}}
			<td>{{ $u->name }}</td>
			<td>{{ $u->type }}</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br><br>
@endsection('conteudo')
