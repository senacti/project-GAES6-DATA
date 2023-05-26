<!DOCTYPE html>
<html>
<head>
	<title>Calcular raíz cuadrada en PHP</title>
</head>
<body>

	<form method="POST">
		<label for="numero">Ingrese un número:</label>
		<input type="number" name="numero" id="numero" required>
		<button type="submit">Calcular raíz cuadrada</button>
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$numero = $_POST["numero"];
		if ($numero >= 0) {
			$raiz_cuadrada = 0;
			while ($raiz_cuadrada * $raiz_cuadrada <= $numero) {
				$raiz_cuadrada ++;
			}
			$raiz_cuadrada--;
			echo "La raíz cuadrada aproximada de $numero es: $raiz_cuadrada";
		} else {
			echo "Ingrese un número positivo.";
		}
	}
	?>

</body>
</html>
