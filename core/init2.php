<?php

  session_start();
  require_once 'function.php';
  //load class
spl_autoload_register(function($class){
    require_once '../classes/'.$class. '.php';
});

$user = new user();


 ?>
