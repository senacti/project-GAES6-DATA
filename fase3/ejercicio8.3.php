<?php

$rows = 5; // Número de filas para la pirámide

// Bucle para imprimir cada fila de la pirámide
for ($i = 1; $i <= $rows; $i++) {

    // Bucle para imprimir los espacios en blanco antes de los números en la fila actual
    for ($j = 1; $j <= $rows - $i; $j++) {
        print "&nbsp";
    }

    // Bucle para imprimir los números en la fila actual
    $number = 1;
    for ($j = 1; $j <= $i; $j++) {
        print $number . "&nbsp";
        $number++;
    }

    // Saltar una línea después de imprimir los números en la fila actual
    echo "<BR>";
}

?>
