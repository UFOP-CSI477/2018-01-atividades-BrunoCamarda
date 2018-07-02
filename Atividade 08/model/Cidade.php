<?php
namespace Model;
use Model\Database;

class Cidade{
	protected $db = null;
	private $id;
	private $nome;
	private $estado_id;

	public function __construct(){
		$this->db = Database::getInstance()->getDB();
		$this->id = 0;
	}

	public function __construct2($id, $nome, $estado_id){
		$this->db = Database::getInstance()->getDB();
		$this->$id = $id;
		$this->$nome = $nome;
		$this->$estado_id = $estado_id;
	}

	public function __construct3($nome, $estado_id){
		$this->db = Database::getInstance()->getDB();
		$this->$id = 0;
		$this->$nome = $nome;
		$this->$estado_id = $estado_id;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setEstadoId($estado_id){
		$this->estado_id = $estado_id;
	}

	public function all(){
		$sql = "SELECT * FROM cidades ORDER BY nome";
		return $this->db->query($sql);
	}

	public function insert($nome, $estado_id){
		$sql = "INSERT INTO cidades (nome, estado_id) VALUES ('$nome', '$estado_id')";
	  $this->db->query($sql);
	}

	public function update(){
	}

	public function delete(){
	}

	public function save(){
		if( $this->id == 0){
			$this->insert();
		}else{
			$this->update();
		}
	}

	public function listar() {
		$lista = $this->all();
		// Invocar a View
		include './view/cidades/lista.php';
	}

}
