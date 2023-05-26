<?php
function suma(float $num1 = 0, float $num2 = 0)
{
    $resultado = M_PI*(($num1 * $num1)*$num2);
echo $resultado;
}

$numero1 = readline("cual es el radio de la base?"); 
$numero2 = readline("cual es la altura?");
suma($numero1, $numero2);
?>