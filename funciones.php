<?php
declare(strict_types=1);
function divide(&$divisor, $dividendo=1){
    $resultado = $divisor/$dividendo;
    echo "el resultado de la division es: $resultado";
}

//divide(12,4);
$arg1=100;
$arg2=25;
divide($arg1, $arg2);

//tambien se pueden hacer funciones recursivas

function recursiva($valor){
    if($valor<=10){
        echo "$valor <br/>";
        recursiva(++$valor);
    }
}

recursiva(1);

//funciones anonimas
$operacion = function($num1,$num2){
    return $num1+$num2;
};

echo $operacion(3,5);

//declaraciones de tipo escalar

function validacion(int $edad):string{
    if($edad >= 18){
        return "puedes entrar";
    }else{
        return "no puedes entrar";
    }
}

echo validacion(18);

?>