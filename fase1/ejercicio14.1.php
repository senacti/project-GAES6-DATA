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
        <legend>Distancias</legend>
    <p>ingrese la distancia en metros a transformar</p>
    <form action="ejercicio14.1.php" method="post">
    <input type="float" name="edad"> a 
        <select name="select">
            <option value="30">Cm</option>
            <option value="60">Km</option>
            <option value="90">Mm</option>
        </select>
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $edad = $_POST["select"];
        $valor = $_POST["edad"];
        $total;
        if ($edad == "30"){
            $total = $valor * 100;
            print "total: $total Cm" ;
        } 
        elseif ($edad == "60"){
            $total = $valor / "1000";
            print "total: $total Km" ;
        }
        else{
            $total = ($valor * "100") * "10";
            print "total: $total Mm" ;
        }

    }
    ?>
</body>
</html>