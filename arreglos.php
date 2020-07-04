<?php
//arreglo indexado
echo "arreglo indexado: <br/>";
$colors = array('Azul', 'Morado', 'Negro');

print_r($colors);
echo "<br/>";

echo "$colors[0] <br/>";

foreach($colors as $color){
    echo "$color <br/>";
}

$colors[1]="Verde";
foreach($colors as $color){
    echo "$color <br/>";
}

//arreglo asociativo
echo "---------------------------------------------------------------------------------------------- <br/>";
echo "Arreglo asociativo: <br/>";

$personas = array('nombre'=>'Cristhian', 'apellido'=>'Vargas', 'edad'=>25);

print_r($personas);

foreach($personas as $persona){
    echo "<br/>$persona<br/>";
}

$personas['sexo']='M';

print_r($personas);

$personas['apellido']='Quiroz';

print_r($personas);

echo "---------------------------------------------------------------------------------------------- <br/>";
echo "Arreglo multidimencionales \"matrices\" : <br/>";

$tablero=array(
    'A'=>array('azul','blanco','negro'),
    'B'=>array('verde','marron','celeste'),
    'C'=>array('morado','rojo','naranja'),
    'D'=>array('mostaza','plomo','rosado'),
);

print_r($tablero);

$coordenadas = $tablero['A'][2];

print "$coordenadas";

foreach($tablero as $key=>$valor){
    for ($i=0; $i < sizeof($valor) ; $i++) { 
        if($tablero[$key][$i]=='azul'){
            echo "coordenadas: Fila $key columna $i : $valor[$i] destruir <br/>";
        }else{
            echo "coordenadas: Fila $key columna $i : $valor[$i] <br/>";
        }
    }
}
?>