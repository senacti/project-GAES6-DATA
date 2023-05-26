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
        <legend>edad</legend>
    <form action="ejercicio4.1.php" method="post">
        <label for="uno">Año de nacimiento</label>
    <input type="float" name="uno">
    <label for="dos"> Año actual</label>
    <input type="float" name="dos">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
        $dos = $_POST["dos"];
        $total = $dos - $uno;
        print "Edad actual: ". $total;
    }
    ?>
</body>
</html>