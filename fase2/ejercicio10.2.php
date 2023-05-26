<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de precios de llantas</title>
</head>
<body>
	<form method="post" action="ejercicio10.2.php">
		<label for="num_llantas">Ingrese el número de llantas:</label>
		<input type="number" id="num_llantas" name="num_llantas" required>
		<br><br>
		<input type="submit" value="Calcular">
	</form>
    <?php
    if ($_POST){
	// Leemos el número de llantas
	$num_llantas = intval($_POST["num_llantas"]);
	// Calculamos el precio unitario según la política del almacén
	if ($num_llantas < 6) {
	    $precio_unitario = 240000;
	} elseif ($num_llantas <= 7) {
	    $precio_unitario = 221000;
	} else {
	    $precio_unitario = 180000;
	}

	// Calculamos el valor total de la compra
	$valor_total = $num_llantas * $precio_unitario;

	// Mostramos el resultado
	echo "El valor total a pagar es: $" . $valor_total;
}
	?>
</body>
</html>
