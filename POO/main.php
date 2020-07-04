<?php
require_once('persona.php');
require_once('cliente.php');
require_once('empleado.php');
$persona1 = new Persona();
$persona1->nombre='Cristhian';
$persona1->apellidos='Vargas Quiroz';

Persona::$color='azul';

echo $persona1->nombre;

$persona1->see();

$jose = new Cliente();
$jose->eat();

$juan = new Empleado();
$juan ->run();

//poner abstract delante de las clases o las funciones las convienten en abstractas eso implicaria crear metodos propios o clases propias
//clases anonimas

$anonimo = new class{
    private $dividendo;
    private $divisor;

    public function __construct()
    {
        
    }

    public function dividir(){
        echo "hola";
    }
};

$anonimo->dividir();
?>