<?php
function par($num1 = 0){
    $resultado = $num1 %2;
    if ($resultado == 0) {
        echo "el numero es par";
    }else {
        echo "el numero es inpar";
    }
}
$numero1 = readline("ingrese el numero");
par($numero1);
?>