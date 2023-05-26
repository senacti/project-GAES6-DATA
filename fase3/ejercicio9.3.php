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
        <legend>factorial</legend>
    <p>ingrese el numero</p>
    <form action="ejercicio9.3.php" method="post">
    <input type="int" name="uno">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
  $numero = $_POST["uno"];
  $factorial = 1;

  for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
  }

  echo "El factorial de ".$numero." es ".$factorial;
}
?>
</body>
</html>
