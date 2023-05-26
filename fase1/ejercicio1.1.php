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
        <legend>multiplicacion</legend>
    <p>ingrese tres numeros</p>
    <form action="ejercicio1.1.php" method="post">
    <input type="int" name="uno">
    <input type="int" name="dos">
    <input type="int" name="tres">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
        $dos = $_POST["dos"];
        $tres = $_POST["tres"];
        $total = $uno * $dos * $tres;
        print "total: ". $total;
    }
    ?>
</body>
</html>