<?php
namespace Controller;
use Model\Aluno;
use Model\Cidade;
class AlunosController {
  public function listar() {
    $aluno = new Aluno();
    $lista = $aluno->all();
    include './view/alunos/lista.php';
  }

  public function create(){
		$cidades = new Cidade;
		$lista = $cidades->all();
		include './view/alunos/create.php';
	}

  public function store($request){
		$nome = $request['nome'];
    $rua = $request['rua'];
    $numero = $request['numero'];
    $bairro = $request['bairro'];
		$cidade_id = $request['cidade_id'];
    $cep = $request['cep'];
    $email = $request['email'];
		$aluno = new Aluno();
		$aluno->insert($nome, $rua, $n, $bairro, $cidade_id, $cep, $email);
	}

}
