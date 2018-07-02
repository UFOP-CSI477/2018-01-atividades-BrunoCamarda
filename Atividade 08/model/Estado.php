<?php
namespace Model;
use Model\Database;

class Estado{
	protected $db;

	public function __construct(){
		$this->db = Database::getInstance()->getDB();
	}

	public function all(){
		$sql = "SELECT * FROM estados ORDER BY nome";
		return $this->db->query($sql);
	}

	public function insert($nome, $sigla) {
  $sql = "INSERT INTO estados (nome, sigla) VALUES ('$nome', '$sigla')";
  $this->db->query($sql);
  }

}
