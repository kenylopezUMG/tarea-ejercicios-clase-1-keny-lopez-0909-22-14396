<?php

// Función para generar y mostrar la tabla de multiplicar de un número dado
function tablaMultiplicar($numero) {
    echo "Tabla de multiplicar del $numero:\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "\n";
    }
}

// Función para calcular el factorial de un número dado
function factorial($numero) {
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }
    echo "Factorial de $numero: $factorial\n";
}

// Función para verificar si un número es primo
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Función para verificar si un número es par
function esPar($numero) {
    if ($numero % 2 == 0) {
        echo "$numero es par\n";
    } else {
        echo "$numero no es par\n";
    }
}

// Números seteados en variables
$variable1 = 5;
$variable2 = 11;
$variable3 = 8;
$variable4 = 7;

// Generar y mostrar las tablas de multiplicar del 4 y del 6
tablaMultiplicar(4);
tablaMultiplicar(6);

// Calcular y mostrar el factorial de la variable1
factorial($variable1);

// Verificar si el número de la variable2 es primo
if (esPrimo($variable2)) {
    echo "$variable2 es primo\n";
} else {
    echo "$variable2 no es primo\n";
}

// Verificar si el número de la variable3 es par
esPar($variable3);

// Mostrar la tabla de multiplicar del número de la variable4
tablaMultiplicar($variable4);

?>
