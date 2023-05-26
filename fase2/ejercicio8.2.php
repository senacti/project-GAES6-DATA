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
    <p>ingrese tres numeros</p>
    <form action="ejercicio8.2.php" method="post">
    <input type="int" name="uno">
    <input type="int" name="dos">
    <input type="int" name="tres">
    <p><input type="submit"></p>
    </form>
    </fieldset>
    <?php
    if ($_POST){
        $uno = $_POST["uno"];
        $dos = $_POST["dos"];
        $tres = $_POST["tres"];
        $a;
        if ($uno > $dos and $uno > $tres) {
            print($uno);
            if ($dos > $tres) {
                print($dos);
                print($tres);
                $a = $tres.$dos.$uno;
                echo '<BR>';
                print($a);
            }else{
                print($tres);
                print($dos);
                $a = $dos.$tres.$uno;
                echo '<BR>';
                print($a);
            }
        }elseif ($dos > $uno and $dos > $tres) {
            print($dos);
            if ($uno > $tres) {
                print($uno);
                print($tres);
                $a = $tres.$uno.$dos;
                echo '<BR>';
                print($a);
            }else{
                print($tres);
                print($uno);
                $a = $uno.$tres.$dos;
                echo '<BR>';
                print($a);
            }
        }elseif ($tres > $uno and $tres > $dos) {
            print($tres);
            if ($uno > $dos) {
                print($uno);
                print($dos);
                $a = $dos.$uno.$tres;
                echo '<BR>';
                print($a);
            }else{
                print($dos);
                print($uno);
                $a = $uno.$dos.$tres;
                echo '<BR>';
                print($a);
            }
        }else {
            print($uno);
            print($dos);
            print($tres);
            $a = $tres.$dos.$uno;
            echo '<BR>';
            print($a);
        }
        
    }
    ?>
</body>
</html>