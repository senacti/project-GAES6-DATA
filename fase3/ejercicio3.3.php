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
        <legend>fibonacci</legend>
    <p>ingrese un numero</p>
    <form action="ejercicio3.3.php" method="post">
    <input type="int" name="uno">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
$a = 0;
for ($i=0; $i <= $uno; $i++) { 
    $a += $i;
}
print $a;
    }
    ?>
</body>
</html>