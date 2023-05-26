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
    <p>ingrese su edad</p>
    <form action="ejercicio2.2.php" method="post">
    <input type="int" name="edad">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $edad = $_POST["edad"];
        if ($edad >= "18"){
            print "es mayor de edad";
        } 
        elseif ($edad < "18" and $edad > "0"){
            print "es menor de edad";
        }
        else{
            print "valor incorrecto";
        }

    }
    ?>
</body>
</html>