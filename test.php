<?php

require_once("di_config.php");

// autoload
spl_autoload_register(function($class){

  $lists = explode("\\", $class);
print_r($lists);

  require_once(implode("/", $lists) . ".php"); 
});

$log = $container["log"];
$log->regist();
