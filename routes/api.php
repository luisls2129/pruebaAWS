
<?php
require_once($base_path."/controllers/TypesController.php");

if (is_numeric(end($ruta))) {
  $id = end($ruta);
  $ruta = prev($ruta);
}else{
  $ruta = end($ruta);
}


$type = new TypesController();
switch ($ruta) {
  case 'getTypes':
    echo $type->{$ruta}();
    break;
  case 'getType' :
    echo $type->{$ruta}($id);
    break;
  case 'pokemons':
    require_once($base_path."/pokemons.php");
    break;
  default:
  require_once($base_path."/404.php");
    break;
}
?>