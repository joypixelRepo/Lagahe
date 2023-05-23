<?php
class ApplicationController {

  protected function render($view, $vars = []) {
    if (file_exists($view)) {
      extract($vars);
      include($view);
    } else {
      echo "<script>console.log('El archivo ".$view." no existe'"."\n".");</script>";
    }
  }

}
