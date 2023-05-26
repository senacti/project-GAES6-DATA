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
        <legend>suma y promedio</legend>
    <p>ingrese 10 numeros</p>
    <form action="ejercicio4.3.php" method="post">
    <input type="int" name="uno" style="width: 30px;" value="0">
    <input type="int" name="dos" style="width: 30px;" value="0">
    <input type="int" name="tres" style="width: 30px;" value="0">
    <input type="int" name="cuatro" style="width: 30px;" value="0">
    <input type="int" name="cinco" style="width: 30px;" value="0">
    <input type="int" name="seis" style="width: 30px;" value="0">
    <input type="int" name="siete" style="width: 30px;" value="0">
    <input type="int" name="ocho" style="width: 30px;" value="0">
    <input type="int" name="nueve" style="width: 30px;" value="0">
    <input type="int" name="diez" style="width: 30px;" value="0">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
  $uno = $_POST["uno"];
  $dos = $_POST["dos"];
  $tres = $_POST["tres"];
  $cuatro = $_POST["cuatro"];
  $cinco = $_POST["cinco"];
  $seis = $_POST["seis"];
  $siete = $_POST["siete"];
  $ocho = $_POST["ocho"];
  $nueve = $_POST["nueve"];
  $diez = $_POST["diez"];
  $suma = ($uno + $dos + $tres + $cuatro + $cinco + $seis + $siete + $ocho + $nueve + $diez);
  $promedio = $suma/10;
  print "Suma total: ".$suma."<BR>";
  print "Promedio: ".$promedio;
    }
  ?>
</body>
</html>