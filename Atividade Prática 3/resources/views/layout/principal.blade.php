@extends('layout.header')
<br><br><br>
@section('conteudo')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema Acadêmico</title>

</head>
<body>
	<body>
    <?php if(!isset ($_SESSION) == true){
    session_start();
    }
    ?>
    <br><br><br>
    <center><h3>Análises Laboratoriais</h3>
      <p> Utilize o menu acima para acessar as informações que precisa
        <p> Você pode conferir a lista de procedimentos disponíveis acessando o menu Área Geral -> Lista de Procedimentos. Ou <a href="/procedures">clicando aqui </a>
        <h6> Cliente, favor cadastrar-se no menu Login -> Cadastrar-se</h6>
    </tbody>
    </table>
  </body>


</body>
</html>
@endsection('conteudo')
