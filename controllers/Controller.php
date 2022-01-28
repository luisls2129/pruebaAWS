<?php

class Controller {

  public function __call($name, $arguments){
    $this->sendResponse('', array('HTTP/1.1 404 Not Found'));
  }

  protected function sendResponse($data, $httpHeaders=array()){
    if (is_array($httpHeaders) && count($httpHeaders)) {
      foreach ($httpHeaders as $httpHeader) {
        header($httpHeader);
      }
    }

    echo json_encode($data);
    exit;
  }

}
?>