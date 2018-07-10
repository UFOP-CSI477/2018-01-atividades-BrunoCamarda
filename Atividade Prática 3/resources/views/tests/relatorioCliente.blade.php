@extends('layout.principal')
@section('conteudo')

	<br><br><center><h3> Relatório de Exames por Cliente </h3><br><br>
	<table class="table table-striped">
		<thead>
			<th> Cliente </th>
			<th> Quantidade de Exames </th>
			<th> Valor Total </th>
		</thead>
		<tbody>
		@foreach( $user as $u )
		<tr>
			<td>{{ $u->Uname }}</td>
			<td>{{ $u->quantidade }}
			</td>
			<td> {{ $u->valor }}
			</td>
			<td>
					<a href="{{route('tests.relatorioClienteShow', $u->userId)}}"><input type="button" class="btn btn-info btn-xs" value="Ver Exames"></button></a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br><br>
@endsection('conteudo')
