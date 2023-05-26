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
        <legend>multiplicacion</legend>
    <p>ingrese un numero</p>
    <form action="ejercicio5.3.php" method="post">
    <input type="int" name="uno">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
for ($i=0; $i <= 10; $i++) { 
    echo $i*$uno."<BR>";
}
    }
    ?>
</body>
</html>