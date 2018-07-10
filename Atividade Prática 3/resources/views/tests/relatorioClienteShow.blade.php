@extends('layout.principal')
@section('conteudo')

<center><h5> Exames Marcados</h5>
	<br><br>
  @foreach ($proc as $p)
	    <p> {{ $p->Pname}}
	@endforeach
  <br><br>
	<a href="/tests/relatorioCliente"><input type="button" class="btn btn-warning" value="Voltar"></a>
@endsection('conteudo')
