@extends('layout.principal')
@section('conteudo')
<br><br><br><br>
	<table class="table table-striped">
		<thead>
			<th> Id </th>
			<th> Nome </th>
			<th> Preço </th>
		</thead>
		<tbody>
		@foreach( $procedures as $u )
		<tr>
			<td>{{ $u->id }}</td>
			<td>{{ $u->name}}
			<td>{{ $u->price }}</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br><br>
@endsection('conteudo')
