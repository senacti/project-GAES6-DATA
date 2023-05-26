<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de áreas de figuras geométricas</title>
</head>
<body>
	<h1>Calculadora de áreas de figuras geométricas</h1>
	<form method="post">
		<label>Seleccione una figura:</label>
		<select name="figura">
			<option value="">Seleccione una figura</option>
			<option value="cuadrado">Cuadrado</option>
			<option value="rectangulo">Rectángulo</option>
			<option value="triangulo">Triángulo</option>
            <option value="rombo">rombo</option>
            <option value="trapecio">trapecio</option>
            <option value="circulo">circulo</option>
		</select>
		<input type="submit" name="submit" value="Calcular" >
	</form>
    <?php 
    if(isset($_POST['calcular'])) {
        switch ($_POST["figura"]) {
            case 'cuadrado':
                $base = $_POST["base"];
                $total = $base * $base;
                print("el area del cuadrado es: ".$total);
                break;
            case 'rectangulo':
                $base = $_POST["base"];
                $altura = $_POST["altura"];
                $total = $altura * $base;
                print("el area del rectangulo es: ".$total);
                break;
                case 'triangulo':
                    $base = $_POST["base"];
                    $altura = $_POST["altura"];
                    $total = ($altura * $base)/2;
                    print("el area del triangulo es: ".$total);
                    break;
                    case 'circulo':
                        $base = $_POST["base"];
                        $total = ($base * $base)*3.14;
                        print("el area del circulo es: ".$total);
                        break;
                        case 'rombo':
                            $base = $_POST["base"];
                            $altura = $_POST["altura"];
                            $total = ($altura * $base)/2;
                            print("el area del rombo es: ".$total);
                            break;
                            case 'trapecio':
                                $base = $_POST["base"];
                                $altura = $_POST["altura"];
                                $hipo = $_POST["hipotenusa"];
                                $total = (($altura + $base)/2)*2;
                                print("el area del trapecio es: ".$total);
                                break;
            
            default:
                # code...
                break;
        }
    } ?>
	<?php
		if(isset($_POST['submit'])) {
			$figura = $_POST['figura'];

			switch($figura) {
				case 'cuadrado':
					echo '<h2>Cálculo del área de un cuadrado:</h2>';
					echo '<form method="post">';
                    echo '<p><input type="text" value="cuadrado" name="figura" readonly onmousedown="return false;"></p>';
					echo '<label>lado:</label>';
					echo '<input type="number" name="base"><br>';
					echo '<input type="submit" name="calcular" value="calcular">';
					echo '</form>';
					break;
				case 'rectangulo':
					echo '<h2>Cálculo del área de un rectángulo:</h2>';
					echo '<form method="post">';
                    echo '<p><input type="text" value="rectangulo" name="figura" readonly onmousedown="return false;"></p>';
					echo '<label>Base:</label>';
					echo '<input type="number" name="base"><br>';
					echo '<label>Altura:</label>';
					echo '<input type="number" name="altura"><br>';
					echo '<input type="submit" name="calcular" value="calcular">';
					echo '</form>';
					break;
				case 'triangulo':
					echo '<h2>Cálculo del área de un triángulo:</h2>';
					echo '<form method="post">';
                    echo '<p><input type="text" value="triangulo" name="figura" readonly onmousedown="return false;"></p>';
					echo '<label>base:</label>';
					echo '<input type="number" name="base"><br>';
					echo '<label>hipotenusa:</label>';
					echo '<input type="number" name="altura"><br>';
					echo '<input type="submit" name="calcular" value="Calcular">';
					echo '</form>';
					break;case 'rombo':
                        echo '<h2>Cálculo del área de un rombo:</h2>';
                        echo '<form method="post">';
                        echo '<p><input type="text" value="rombo" name="figura" readonly onmousedown="return false;"></p>';
                        echo '<label>AC:</label>';
                        echo '<input type="number" name="base"><br>';
                        echo '<label>BD:</label>';
                        echo '<input type="number" name="altura"><br>';
                        echo '<input type="submit" name="calcular" value="Calcular">';
                        echo '</form>';
                        break;
                        case 'trapecio':
                            echo '<h2>Cálculo del área de un trapecio:</h2>';
                            echo '<form method="post">';
                            echo '<p><input type="text" value="trapecio" name="figura" readonly onmousedown="return false;"></p>';
                            echo '<label>Base:</label>';
                            echo '<input type="number" name="base"><br>';
                            echo '<label>Altura:</label>';
                            echo '<input type="number" name="altura"><br>';
                            echo '<label>Hipotenusa:</label>';
                            echo '<input type="number" name="hipotenusa"><br>';
                            echo '<input type="submit" name="calcular" value="Calcular">';
                            echo '</form>';
                            break;case 'circulo':
                                echo '<h2>Cálculo del área de un circulo:</h2>';
                                echo '<form method="post">';
                                echo '<p><input type="text" value="circulo" name="figura" readonly onmousedown="return false;"></p>';
                                echo '<label>Radio:</label>';
                                echo '<input type="number" name="base"><br>';
                                echo '<input type="submit" name="calcular" value="Calcular">';
                                echo '</form>';
                                break;
				default:
					echo '<p>Seleccione una figura para calcular su área.</p>';
					break;
			}
		}
	?>
</
