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
        <legend>porcentaje</legend>
    <p>ingrese el numero a porcentar</p>
    <form action="ejercicio6.1.php" method="post">
        <select name="select">
            <option value="30">30%</option>
            <option value="60">60%</option>
            <option value="90">90%</option>
        </select>
    de <input type="float" name="edad">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $edad = $_POST["select"];
        $valor = $_POST["edad"];
        $total;
        if ($edad == "30"){
            $total = ($valor * $edad) / "100";
            print "total: " ;
            print $total;
        } 
        elseif ($edad == "60"){
            $total = ($valor * $edad) / "100";
            print "total: " ;
            print $total;
        }
        else{
            $total = ($valor * $edad) / "100";
            print "total: " ;
            print $total;
        }

    }
    ?>
</body>
</html>