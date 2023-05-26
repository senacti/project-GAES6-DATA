<?php

try {
    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=actividad", "root", "");
    $records = $conexion->prepare('SELECT usuario, contraseña, id FROM usuarios WHERE usuario = :usuario');
    $usuario = $records ;

} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
<?php
try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=actividad", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO usuarios(usuario, nombre, contraseña, apellido, ciudad, codigo, pais) VALUES(?, ?, ?, ?)');
    $pdo->bindParam(1, $usuario);
    $pdo->bindParam(2, $nombre);
    $pdo->bindParam(3, $contraseña);
    $pdo->bindParam(4, $apellido);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}