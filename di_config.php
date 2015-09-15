<?php

require_once("vendor/autoload.php");

use Pimple\Container;
use lib\log;
use lib\fileoperation;

$container = new Container();

$container["file_operation"] = $container->factory(function($c){
    return new fileOperation();
});

$container["log"] = $container->factory(function($c){
    return new log($c["file_operation"]);
});