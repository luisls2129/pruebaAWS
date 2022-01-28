<?php
require_once($base_path."/controllers/BaseDatos.php");
class TypesController extends Controller{
  private $db;

  public function __construct(){
    global $db;
    $this->db = $db;
  }

  public function getTypes(){
    $select = "SELECT * FROM tipos";     
    $types = $this->db->select($select);
    
    return $this->sendResponse($types);
  }
  
  public function getType($id) {
    $select = "SELECT nombre FROM tipos WHERE id = {$id}"; 
    $type = $this->db->select($select);

    return $this->sendResponse($type);
  }
}
?>