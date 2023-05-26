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
        <legend>Tiempo</legend>
    <form action="ejercicio13.1.php" method="post">
        <label for="uno">Tiempo en segundos </label>
    <input type="int" name="uno">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
        $minutos = $uno / "60";
        $hora = $uno / "3600";
        print "Segundos: $uno, Minutos $minutos, Horas: $hora";
    }
    ?>
</body>
</html>