<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pares</title>
</head>
<body>
    <fieldset>
        <legend>pares</legend>
    <p>ingrese un numero</p>
    <form action="ejercicio1.2.php" method="post">
    <input type="int" name="edad">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $edad = $_POST["edad"];
        $total = $edad %2;
        if ($total == "0"){
            print "es par";
        } 
        else{
            print "es inpar";
        }

    }
    ?>
</body>
</html>