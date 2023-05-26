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
        <legend>Notas</legend>
    <p>ingrese La nota</p>
    <form action="ejercicio5.2.php" method="post">
    <input type="float" name="uno">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
        $total = $uno * $uno;
        if ($uno > "0" and $uno < "3"){
            print "No aprobo";
        } 
        elseif ($uno >= "3" and $uno <= "5"){
            print "Aprobo";
        }
        else{
            print "nota no valida";
        }
    }
    ?>
</body>
</html>