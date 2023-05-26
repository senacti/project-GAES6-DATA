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
        <legend>Salario</legend>
    <form action="ejercicio10.1.php" method="post">
        <label for="uno">Valor del dia </label>
    <input type="float" name="uno">
    <label for="dos"> Cantidad de dias </label>
    <input type="float" name="dos">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
        $dos = $_POST["dos"];
        $cantidad = $uno * $dos;
        $pension = $cantidad * "0.1";
        $salud = $cantidad * "0.15";
        $total = $cantidad - $pension - $salud;
        print "pension: ". $pension. "$,         ";
        print "salud: ". $salud. "$,         ";
        print "   Total: ". $total. "$";
    }
    ?>
</body>
</html>