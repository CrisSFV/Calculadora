<?php

class Calculadora{
    private $numero1;
    private $numero2;

    public function __construct($numero1, $numero2){
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    private function suma(){
        return $this->numero1 + $this->numero2;
    }

    public function sumaPublica(){
        return $this->suma();
    }

    private function resta(){
        return $this->numero1 - $this->numero2;
    }

    public function restaPublica(){
        return $this->resta();
    }

    private function multiplicacion(){
        return $this->numero1 * $this->numero2;
    }

    public function multiplicacionPublica(){
        return $this->multiplicacion();
    }
}
