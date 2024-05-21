<?php
echo "EJERCICIO UNO <br>";
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
echo "<br>";
echo "<br> EJERCICIO DOS";
// llamo la funcion 
MesesAleatorios(rand(1,12));
// la variable mes tiene de valor un rand con 12 numeros 
function MesesAleatorios($mes){
    // creo un arreglo asociativo con los valores del mes 
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

echo "<br>";
echo "<br> EJERCICIO TRES";
// llamo la funcion q tiene 2 valores de las variables
DosValores(rand(1,20), rand(1,20));
function DosValores ($valor1, $valor2){
    echo " <br> valor uno: $valor1";
    echo "<br> valor dos: $valor2 <br>";

    if ($valor1 < $valor2) {
        for ($i=$valor1; $i < $valor2 ; $i++) { 
            echo "$i,";
        }
        echo "ascendente <br> ";
    } elseif ($valor1 > $valor2) {
        for ($a=$valor1; $a > $valor2 ; $a--) { 
            echo "$a,";
        }
        echo "descendente <br>";
    }
}

echo "<br>";
echo "<br> EJERCICIO CUATRO";