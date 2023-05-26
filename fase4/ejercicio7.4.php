<?php
function suma(float $num1 = 0, float $num2 = 10)
{
    if ($num1 > 0) {
        $iva = $num1 * $num2 / 100;
        $resultado = $num1 + $iva;
    echo "Total: ".$resultado;
    echo "IVA :".$iva;
    }else {
        echo "no ahi precio";
    }
}

$numero1 = readline("precio total: "); 
$numero2 = readline("iva: ");
suma($numero1, $numero2);
?>