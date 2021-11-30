<?php
require_once("Routes.php");

class AutoLoader {
  public static function register() {
    spl_autoload_register(function($class) {
      if (file_exists('./classes/'.$class.'.php')) {
        require './classes/'.$class.'.php';
      } else if (file_exists('./controllers/'.$class.'.php')) {
        require './controllers/'.$class.'.php';
      }
    });
  }
}
?>
