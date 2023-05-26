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
        <legend>20%</legend>
    <p>ingrese un numero</p>
    <form action="ejercicio5.1.php" method="post">
        <label for="uno">20% de </label>
    <input type="float" name="uno">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
        $total = $uno * "0.2";
        print "total: ". $total;
    }
    ?>
</body>
</html>