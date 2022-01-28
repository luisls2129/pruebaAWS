<?php

class BaseDatos {

  protected static $bd ;

  private function __construct() {}

  public function __clone() {
    return null;
  }

  public static function connection() {
    if (empty(self::$bd)) {
      self::$bd = new PDO("mysql:host=localhost;dbname=pokemons", "root", "");
      self::$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    return self::$bd;
  }
}

?>