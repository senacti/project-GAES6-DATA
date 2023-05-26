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
        <legend>Promedio</legend>
    <p>ingrese cinco numeros</p>
    <form action="ejercicio8.1.php" method="post">
    <input type="int" name="uno">
    <input type="int" name="dos">
    <input type="int" name="tres">
    <input type="int" name="cuatro">
    <input type="int" name="cinco">
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
        $total = ($uno + $dos + $tres + $cuatro + $cinco) / "5";
        print "Promedio: ". $total;
    }
    ?>
</body>
</html>