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
        <legend>positivo</legend>
    <p>ingrese un numero</p>
    <form action="ejercicio4.2.php" method="post">
    <input type="int" name="uno">
    <input type="int" name="dos">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
        $dos = $_POST["dos"];
        if ($uno > $dos){
            print $uno . " es mayor que ". $dos;
        }
        else{
            print $dos . " es mayor que ". $uno;
        }

    }
    ?>
</body>
</html>