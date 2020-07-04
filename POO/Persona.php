<?php

class Persona{
    //Atributos
    public $nombre;
    public $apellidos;
    public $sexo;
    public $nacionalidad;
    public $edad;
    static $color = 'amarrillo';
 
    //metodos
    function run(){
        echo "desde la clase padre que es persona";
    }

    function see(){
        $this->sendOrder('ver');

    }

    protected function talk(){
        echo "este es un metodo de la clase padre";
    }
    
    private function sendOrder($orden){
        switch ($orden) {
            case 'correr':
                echo "estoy corriendo";
                break;
            case 'ver':
                echo "estoy mirando";
                break;
            case 'hablar':
                echo "estoy hablando";
                break;
            default:
                echo "no se encontro la orden";
                break;
        }
    }
}

?>