<?php
require_once("./config.php");
require_once("./Router.php");
require_once("./controllers/Controller.php");
require_once($base_path."/controllers/BaseDatos.php");

$db = new BaseDatosController();
$router = new Router();
$ruta = $router->getRoutes();
if (in_array('api', $ruta)){
  require_once("./routes/api.php");
}else{
  require_once("./routes/web.php");
}
?>