<?php
namespace Controller;
use Model\Aluno;
class AlunosController {
  public function listar() {
    $aluno = new Aluno();
    $lista = $aluno->all();
    include './view/alunos/lista.php';
  }
}
