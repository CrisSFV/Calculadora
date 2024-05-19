<?php

class Divicion{
    private $numero1;
    private $numero2;

    public function __construct($numero1, $numero2){
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    private function divicion(){
        return $this->numero1 / $this->numero2;
    }

    public function divicionPublica(){
        return $this->divicion();
    }
}