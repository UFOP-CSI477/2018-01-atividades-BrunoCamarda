<?php
namespace Controller;
use Model\Estado;
class EstadosController {
  public function listar() {
    $estado = new Estado();
    $lista = $estado->all();
    include './view/estados/lista.php';
  }
}
