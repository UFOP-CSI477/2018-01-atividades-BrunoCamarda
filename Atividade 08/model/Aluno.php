<?php
namespace Model;
use Model\Database;
class Aluno {
  protected $db = null;
  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }
  public function all() {
    $sql = "SELECT * FROM alunos ORDER BY nome";
    return $this->db->query($sql);
  }

  public function insert($nome, $rua, $n, $bairro, $cidade_id, $cep, $email){
		$sql = "INSERT INTO alunos (nome, rua, numero, bairro, cidade_id, cep, mail) VALUES ('$nome', '$rua', '$n', '$bairro', '$cidade_id', '$cep', '$email')";
	  $this->db->query($sql);
	}
}
