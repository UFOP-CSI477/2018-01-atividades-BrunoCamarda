@extends('layout.principal')
@section('conteudo')

	<br><br><center><h3> Relatório de Exames por Procedimento </h3><br><br>
	<table class="table table-striped">
		<thead>
			<th> Procedimento </th>
			<th> Quantidade de Exames </th>
		</thead>
		<tbody>
		@foreach( $proc as $p )
		<tr>
			<td>{{ $p->proceName }}</td>
			<td>{{ $p->quantidade }}
			</td>
			<td>
				<a href="{{route('tests.relatorioProcedimentoShow', $p->proceId)}}"><input type="button" class="btn btn-info btn-xs" value="Ver Exames"></button></a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<br><br>
@endsection('conteudo')
