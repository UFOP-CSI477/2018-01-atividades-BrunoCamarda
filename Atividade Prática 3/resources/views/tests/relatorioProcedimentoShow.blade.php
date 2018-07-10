@extends('layout.principal')
@section('conteudo')

<center><h5> Clientes com exames deste procedimento</h5>
	<br><br>
  @foreach ($user as $u)
	    <p> {{ $u->Uname}}
	@endforeach
  <br><br>
	<a href="/tests/relatorioProcedimento"><input type="button" class="btn btn-warning" value="Voltar"></a>
@endsection('conteudo')
