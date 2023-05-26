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
        <legend>IVA</legend>
    <form action="ejercicio9.1.php" method="post">
        <label for="uno">Valor Unitario </label>
    <input type="float" name="uno">
    <label for="dos"> Cantidad </label>
    <input type="float" name="dos">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
        $dos = $_POST["dos"];
        $cantidad = $uno * $dos;
        $iva = $cantidad * "0.16";
        $total = $cantidad + $iva;
        print "IVA: ". $iva. "$,         ";
        print "   Total: ". $total. "$";
    }
    ?>
</body>
</html>