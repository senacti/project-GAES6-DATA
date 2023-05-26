<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>masa</title>
</head>
<body>
    <fieldset>
        <legend>masa corporal</legend>
    <form action="ejercicio1.6.php" method="post">
    <label for="uno">Peso en KiloGramos:</label>
    <input type="int" name="uno" required>
    <BR><BR><label for="dos">Altura en metros:</label>
    <input type="int" name="dos"required>
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
        $dos = $_POST["dos"];
        $total = $uno / ($dos * $dos);
if ($total < 18.5) {
  print"Su IMC es: $total Desnutrido ";
} elseif ($total >= 18.5 && $total < 25) {
  print"Su IMC es: $total Normal ";
} elseif ($total >= 25 && $total < 30) {
  print "Su IMC es: $total Sobrepeso ";
} elseif ($total >= 30 && $total < 35) {
  print "Su IMC es: $total Obesidad Grado 1 ";
} elseif ($total >= 35 && $total < 40) {
  print"Su IMC es: $total Obesidad Grado 2 ";
} else {
  print "Su IMC es: $total Obesidad Grado 3 ";
}
    }
    ?>
</body>
</html>