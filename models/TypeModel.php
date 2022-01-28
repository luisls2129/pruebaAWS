<?php 
  class Type {
    private $id;
    private $nombre;

    public function __construct($id, $nombre) {
      $this->nombre = $nombre;
      $this->id = $id;
    }

    public function __get($campo) {
      return $this->{$campo};
    }
    public static function constructBase($nombre){
      $new = new static(NULL, $nombre);     
      return $new;
    }
  }

?>