<?php
namespace Controller;
use Model\Cidade;
use Model\Estado;

class CidadesController{
	public function listar(){
		$cidade = new Cidade();
		$lista = $cidade->all();
		include './view/cidades/lista.php';
	}

	//Exibir o formulario para insercao da Cidade
	public function create(){
		//Carregar os dados dos estados
		$estados = new Estado;
		$lista = $estados->all();
		//Exibir a view
		include './view/cidades/create.php';
	}

	public function store($request){
		$nome = $request['nome'];
		$estado_id = $request['estado_id'];
		$cidade = new Cidade();
		$cidade->insert($nome, $estado_id);
	}


}
