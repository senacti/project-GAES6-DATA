<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edad</title>
</head>
<body>
    <fieldset>
        <legend>efectivo</legend>
    <p>ingrese efectivo?</p>
    <form action="ejercicio9.2.php" method="post">
    <input type="int" name="uno">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $cuenta = $_POST["uno"];
if ($cuenta < 150000) {
  echo "Pago en efectivo";
} elseif ($cuenta <= 300000) {
  echo "Pago con celular (dinero electrónico)";
} elseif ($cuenta <= 600000) {
  echo "Pago con tarjeta de débito";
} else {
  echo "Pago con tarjeta de crédito";
}
    }
?>
</body>
</html>
