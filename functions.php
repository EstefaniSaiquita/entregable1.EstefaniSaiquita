<?php
//llamo a la funcion y le doy un valor
ValorAleatorio(rand(1,100));
//ejecutamos la funcion
function ValorAleatorio($Nro){
    echo "$Nro<br>";
//el if es para saber si es mayor, menor o igual a 50
    if ($Nro < 50) {
        echo "El numero es menor a 50";
    }
    elseif ($Nro > 50) {
        echo "El numero es mayor a 50";
    }
    elseif ($Nro = 50) {
        echo "El numero es igual a 50";
    }
}

MesesAleatorios(rand(1,12));
function MesesAleatorios($mes){
    $Conjuntomes = array(
        "1" => "enero",
        "2" => "febrero",
        "3" => "marzo",
        "4" => "abril",
        "5" => "mayo",
        "6" => "junio",
        "7" => "julio",
        "8" => "agosto",
        "9" => "septiembre",
        "10" => "octubre",
        "11" => "noviembre",
        "12" => "diciembre",
    );
    echo "<br>$mes es igual a $Conjuntomes[$mes]";
}

DosValores(rand(1,10), rand(1,10));
function DosValores ($valor1, $valor2){
    echo " <br>$valor1 $valor2 <br>";
    for ($valor1; $valor1 < $valor2 ; $valor1++) { 
        echo $valor1;
    }

    for ($valor2; $valor2 > $valor1 ; $valor2--) { 
        echo $valor2;
    }
}