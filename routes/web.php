
<?php
if (is_numeric(end($ruta))) {
  $id = end($ruta);
  $ruta = prev($ruta);
}else{
  $ruta = end($ruta);
}

switch ($ruta) {
  case '':
  case 'home':
    require_once($base_path."/views/home.php");
    break;
  case 'pokemons':
    require_once($base_path."/views/pokemons.php");
    break;
  default:
  require_once($base_path."/views/404.php");
    break;
}
?>