<?php
Class Controller  {
  public static function CreateView($viewName) {
          //echo "View Created!";
          require_once("./views/$viewName.php");
  }
}

 ?>
