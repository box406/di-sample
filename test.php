<?php

require_once("di_config.php");

// autoload
spl_autoload_register(function($class){

  require_once("lib/" . $class . ".php"); 
});

$log = $container["log"];
$log->regist();
