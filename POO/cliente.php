<?php

require_once('Persona.php');
require_once('interfaces.php');
require_once('trait.php');

class Cliente extends Persona implements Respiracion{
    private $frecuencia;
    private $correo;

    public function __construct()
    {
        $this->frecuencia="";
        $this->correo="ejemplo@gmail.com";
    }
    public function __set($nombreAtributo, $valor){
        $this->$nombreAtributo=$valor;
    }

    public function __get($nombreAtributo){
        return $this->$nombreAtributo;
    } 
    
    function eat(){
        echo parent::talk();
    }

    public function respirar(){

    }


}

?>