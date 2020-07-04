<?php
    //conversiones en php

    $variable = true;

    $variable = (int)$variable;

    //echo var_dump($variable);

    //echo intval($variable);

    //concatenacion e interpolacion

    $word ='codigo';
    $word1 = 'facil';

    //echo 'hola '.$word.$word1;

    //echo "hola $word1 $word";

    //extraer y buscar

    //echo substr("cristhian vargas quiroz",4,7,);

    $cadena = "hola cristhian como estas aprendiendo php";
    $encuentra = "cr";

    //echo strpos($cadena,$encuentra);

    //reemplaza y formatea

    $buscar = ' ';
    $reemplazar = ':';
    $text = '32 43 54 66 23 43';

    //echo str_replace($buscar,$reemplazar,$text);

    //opredaores de comparacion
     //== igual
     // === identico 
     // != <> diferente
    // !== no identico
    // mayo que, menor que > < 
    // >= <= mayo o igual, menor o igual
    // <=> devuelve 1 el valor es mayor, 0 los valores son iguales, -1 el valor es menor
    $edad=18;
    //echo var_dump($edad!==18);

    //operadores aritmeticos
    // + - * / % 
    $operador1 = 23;
    $operador2 = 24;
    $result = $operador1 + $operador2;
    //echo ($result), "\n";

    // operadores de asignacion
    //+= -= = esos son los valores de asignacion
    $a=3;
    $b=5;
    $a=$b;
    //echo($a);

    //operadores logicos
    //operador y &&, el operador o ||, operador not !(comparacion), 
    //operador and, operador or, operador xor
    
    //operadores de incremento y decremento
    //preincremento ++$a; 
    //postincremento $a++;
    //predecremento --$a;
    //postdecremento $a--;

    //operador ternario
    // (expresion booleana)?expresionTRUE:expresionFALSE;

    //else y else if
    //  if(){
    //  }else if(){
    //  }else{
    //  }

    //Swicth
    /*  
        switch($shirt){
            case 'rojo': echo 'camisa de color rojo';
            break;
            default:
            echo 'no encontramos lo que buscabas';
            break;
        }
    */

    //ciclos}
    //for($i=0,$i>0,$i++){}
    for($i=1;$i<=10;$i++){
        echo "Cristhian manda $i <br>";
    }

    //while($cont<=12){
    //    imtrucciones
    //}
    $cont = 1;
    do{
        echo "hola $cont <br>";
        ++$cont;
    }while($cont<=12);

    //foreach(arreglo as $valor){}

    $arreglo = array('gato','perro','loro');
    $arreglo2 = array('nombre'=>'Cristhian','apellido'=>'Vargas','sexo'=>'nada desde hace casi un año :c');
    foreach($arreglo as $valor){
        echo "$valor <br>";
    }

    foreach($arreglo2 as $clave=>$valor){
        echo "$clave => $valor <br>";
    }

    echo 'es aqui puto';
?>