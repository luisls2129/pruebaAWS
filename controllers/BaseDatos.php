<?php
  require_once($base_path.'/bd.php');

  class BaseDatosController {
    private $dbInstancia;

    public function __construct() {
      $this->dbInstancia = BaseDatos::connection();
    }

    public function select($sql){
      $result = array();
      
      foreach($this->dbInstancia->query($sql) as $fila) {
        $result[] = $fila;
      }

      if (count($result) == 0)
        $result = array("error" => 1, "message" => "No se encontró ningún resultado en la base de datos.");
      return $result;
    }
  }

?>