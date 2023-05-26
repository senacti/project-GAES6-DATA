<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" required>
    <label for="edad">edad</label>
    <input type="text" name="edad" required>
    <label for="correo">correo</label>
    <input type="email" name="correo" required>
    <label for="contraseña">contraseña</label>
    <input type="text" name="contraseña" required>
    <button type="submit">Enviar</button>
    </form>
<?php
if ($_POST) {
    $nombre = $_POST["nombre"];
    $usuario = $_POST["correo"];
    $edad = $_POST["edad"];
    $contraseña = $_POST["contraseña"];
try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=actividad", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO usuarios(nombre, edad, correo, contraseña) VALUES(?, ?, ?, ?)');
    $pdo->bindParam(3, $usuario);
    $pdo->bindParam(1, $nombre);
    $pdo->bindParam(4, $contraseña);
    $pdo->bindParam(2, $edad);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('registrado'."<BR>");
    echo "USUARIOS"."<BR>";

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
}

try {
    $con = mysqli_connect("localhost","root","","actividad");
    $sql = "SELECT * FROM usuarios";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result)> 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Nombre: ". $row["nombre"]."<BR>";
            echo "Edad: ". $row["edad"]."<BR>";
            echo "Correo: ". $row["correo"]."<BR>";
            echo "______________________________________________________________________________________________"."<BR>";
        }
    }
    //$records = $conexion->prepare('SELECT usuario, contraseña, id FROM usuarios WHERE usuario = :usuario');
    //$usuario = $records ;

} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
</body>
</html>