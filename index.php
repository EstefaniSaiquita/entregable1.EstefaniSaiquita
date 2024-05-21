<?php
require_once ('functions.php');

echo "EJERCICIO UNO <br>";
ValorAleatorio(rand(1,100));

echo "<br> EJERCICIO DOS";
MesesAleatorios(rand(1,12));

echo "<br> EJERCICIO TRES";
DosValores(rand(1,100), rand(1,100));

echo "<br> EJERCICIO CUATRO";
echo "estructura For";
PrimeraTabla (2, rand(1, 10));
echo "<br> estructura Do-While <br>";
Segunda (2, rand(1,10));
echo "<br> estructura While <br>";
Tercera (2, rand(1,10));

echo "<br> EJERCICIO CINCO";
TiroDado();

