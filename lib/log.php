<?php

//namespace lib\log;

class log 
{

    private $file_operation;

    public function __construct($fille_operation) {
        $this->file_operation = $fille_operation;
    }

    public function regist() {

        $this->file_operation->make();
    }

}
 