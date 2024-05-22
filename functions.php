<?php
//llamo a la funcion y le doy un valor
//ValorAleatorio(rand(1,100));
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

// llamo la funcion 
// MesesAleatorios(rand(1,12));
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


// llamo la funcion q tiene 2 valores de las variables
//DosValores(rand(1,100), rand(1,100));
function DosValores ($valor1, $valor2){
    echo " <br> valor uno: $valor1";
    echo "<br> valor dos: $valor2 <br>";
//si el primer valor es menor al segundo valor que se haga contador hasta que el primero valga lo mismo que el segundo
    if ($valor1 < $valor2) {
        for ($i=($valor1+1); $i < $valor2 ; $i++) { 
            echo "$i,";
            
        }
        echo "ascendente <br> ";
    } 
//si el primero es mas grande que el segundo se va a restar
    elseif ($valor1 > $valor2) {
        for ($a=($valor1-1); $a > $valor2 ; $a--) { 
            echo "$a,";
        }
        echo "descendente <br>";
    }
//es lo mismo que el primer condicional solo que con el segundo valor
    if ($valor2 < $valor1) {
        for ($i=($valor2 +1); $i < $valor1 ; $i++) { 
            echo "$i,";
        }
        echo "ascendente <br> ";
    } elseif ($valor2 > $valor1) {
        for ($a=($valor2 -1); $a > $valor1 ; $a--) { 
            echo "$a,";
        }
        echo "descendente <br>";
    }
}
// el primer valor vale 2 y en el segundo hay un random 
function PrimeraTabla ($num, $limite){
    echo "<br> num:$num limite: $limite";
// i vale 0 y si i es menor e igual a a la multiplicacion del 2 por el limite, entonces guardamos el valor de i y lo vamos sumando el valor de num (un acumulador)
    for ($i= 0; $i <= ($num * $limite) ; $i = $i + $num) { 
        echo "<br> $i";
    }
}

function Segunda ($num, $limite){
    echo "numero: $num limite: $limite <br>";
    $i = 0;
    do {
        echo $i = $i + $num;
        echo "<br>";
    } while ($i <= ($num * $limite)- $num);
}

function Tercera ($num, $limite){
    echo "numero: $num limite: $limite <br>";
    $i = 0;
    while (($i <= ($num * $limite)- $num)) {
        echo $i = $i + $num;
        echo "<br>";
    }
}



function TiroDado (){
    $uno = 0; //declaramos las variables para que el contador funcione
    $dos = 0;
    $tres = 0;
    $cuatro = 0;
    $cinco = 0;
    $seis = 0;
    for ($i=1; $i <= 100 ; $i++) { // creo un for (bucle) que va a generar 100 numeros
        $dado = rand(1, 6); // los 100 numeros van a ser de forma aleatoria del 1 al 6
        echo "$dado,";

        if ($dado == 1) { //si el numero generado es igual a 1
        $uno++; //entonces que se vaya contando cuanta veces es generado
        }
        elseif ($dado == 2) {
        $dos++;
        }
        elseif ($dado == 3) {
        $tres++;
        }
        elseif ($dado == 4) {
        $cuatro++;
        }    
        elseif ($dado == 5) {
        $cinco++;
        }
        elseif ($dado == 6) {
        $seis++;
        }
    
    }
echo "<br> el numero 1 sale $uno veces";
echo "<br> el numero 2 sale $dos veces";
echo "<br> el numero 3 sale $tres veces";
echo "<br> el numero 4 sale $cuatro veces";
echo "<br> el numero 5 sale $cinco veces";
echo "<br> el numero 6 sale $seis veces";
}