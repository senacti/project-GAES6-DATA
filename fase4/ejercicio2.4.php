<?php
function sumar_cinco_numeros($num1, $num2, $num3, $num4, $num5) {
  $resultado = $num1 + $num2 + $num3 + $num4 + $num5;
  return $resultado;
}

$temporaly = sumar_cinco_numeros(2, 5, 1, 8, 10);
echo "La suma de los cinco números es: " . $temporaly;
?>