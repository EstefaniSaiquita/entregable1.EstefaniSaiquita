# Entregable 1

**LOS ENTREGABLES SON OBLIGATORIOS PARA LA CONDICIÓN DE PROMOCIÓN**

El trabajo se debe realizar de forma individual.
Como ya es de costumbre, los ejercicios se complejizan a medida que avanzo con los desarrollos.

**ESTÁ PROHIBIDO EL USO DE IA PARA SU RESOLUCIÓN**, empecemos a utilizar nuestra propia lógica. Una vez recibidos, habrá tiempo de sobra para consultarlas.

En la próxima clase, posterior a la entrega, veremos como los resolvió CHATGPT. Si existen igualdades de código con la IA, sabrán que ese TP va a ser cuestionado.

Deberan generar un archivo llamado **functions.php** el cual contendrá todas las funciones requeridas en el TP.
**TODOS LOS EJERCICIOS DEBEN SER PLANTEANDOS COMO FUNCIONES**.

Por otro lado, deberan generar un archivo **index.php** que deberá ejecutar cada una de las funciones utilizando las estructuras de invocación correspondientes (tener en cuenta que son 2 archivos diferentes, por lo cual hay que escribir una línea previa antes de las invocaciones).

## Ejercicio 1
- Generar una función que reciba un valor aleatorio entre 1 y 100, luego mostrar el valor y un mensaje que informe si es menor a 50, mayor a 50 o igual a 50.

## Ejercicio 2
- Generar una funcion que reciba un valor aleatorio y diga a que mes corresponde. Los meses deben estar almacenados en un array y retornar el valor correspondiente utilizando su índice. Por ej: si la función recibe el valor 5, deberá mostrar MAYO. 

## Ejercicio 3
- Generar una función que reciba 2 valores distintos y aleatorios entre 1 y 100. Mostrar todos los números entre ellos 2, en forma ascendente y descendente.

## Ejercicio 4
- Generar 3 funciones distintas, cada una deberá recibir 2 valores. Luego deberá mostrar por pantalla la tabla respecto a uno de los números recibidos y como límite de la multiplicación, el otro número. Es decir que si se pasa el 2 y 4, deberá ejecutarse y mostrar la tabla del 2 hasta el múltiplo 4. Son 3 funciones, porque hay una debe usar la estructura *for*, otra *do-while* y la última *while*.

## Ejercicio 5
- Generar una función que simule el tiro de un dado 100 veces. Luego mostrar cuantas veces salió cada valor.

## Ejercicio 6
- Generar una función que simule el tiro de una ruleta, luego mostrar el número que salió con la columna y docena que pertenece. Como plus, si se desafian, el color que tiene.


## Estructura para los ejercicios

- Cada función deberá utilizar nombres que respondan a la acción que va a realizar. **NO USAR FUNCIONES COMO "A", "B", "C", ETC.**

```php
function tiroRuleta(){

}
```

- Si utilizan variables, usar nombres que respondan a lo que contiene. **NO USAR $a, $b, etc**

```php
function tiroRuleta(){
    $valorAleatorio
}
```

- Comentar cada línea de código que utilizo.

```php
//Declaro función
function tiroRuleta(){
    //Declaro variable para guardar el valor aleatorio
    $valorAleatorio
}
```