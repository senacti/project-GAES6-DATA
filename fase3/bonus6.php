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
        <legend>escala</legend>
    <p>ingrese un numero</p>
    <form action="bonus6.php" method="post">
    <input type="int" name="uno">
    <p><input type="submit"></p>
    </form>
    </fieldset>
<?php
if ($_POST){
$uno = $_POST["uno"];
$uno = $uno-1;
$a= 0;
for ($i=0; $i <= $uno ;$i++) { 
    while ($a <= $i) {
        echo "*";
        $a++;
    }
    echo "<BR>";
    $a=0;
}
$a= 0;
for ($i=$uno-1; $i >= 0 ;$i--) { 
    while ($a <= $i) {
        echo "*";
        $a++;
    }
    echo "<BR>";
    $a=0;
}
}
?>