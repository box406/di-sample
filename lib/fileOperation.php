<?php

//namespace lib\fileoperation;

class fileOperation 
{
  
    public function __construct() {

    }

    public function make() {

        touch("test.file");
    }
}