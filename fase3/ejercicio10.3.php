<?php
  $filas = 5;
  $columnas = 5;

  for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
      if ($i == 0 || $i == $filas - 1 || $j == $filas - $i - 1) {
        echo "* ";
      } else {
        echo "&nbsp;&nbsp; ";
      }
    }
    echo "<br>";
  }
?>
