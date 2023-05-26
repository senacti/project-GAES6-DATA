<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>
<body>
    <form action="ejemplo.php" method="POST" >
        <label for="numero1">Escribe un numero</label>
        <input type="number" name="numero1" required value="0">
        <label for="numero2">Escribe otro numero</label>
        <input type="number" name="numero2" required value="0">
        <button type="submit">Sumar</button>
    </form>
    <?php
    if ($_POST) {
        $NUM1 = $_POST['numero1'];
        $NUM2 = $_POST['numero2'];
        $num3 = $NUM1 +$NUM2;
        print("Resultado = ".$num3);
    }
    ?>
</body>
</html>