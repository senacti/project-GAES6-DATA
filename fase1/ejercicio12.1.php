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
        <legend>Hipotenusa</legend>
    <form action="ejercicio12.1.php" method="post">
        <label for="uno">Cateto opuesto </label>
    <input type="float" name="uno">
    <label for="dos"> Cateto adyasente </label>
    <input type="float" name="dos">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
        $unoa = $uno * $uno;
        $dos = $_POST["dos"];
        $dosa = $dos * $dos;
        $tresa = $dosa + $unoa;
        $total = sqrt($tresa);
        print "Hipotenusa: ". $total;
    }
    ?>
</body>
</html>