<?php
function figo($num = 0){
    switch ($num) {
        case '1':
            echo "enero";
            break;
            case '2':
                echo "febrero";
                break;
                case '3':
                    echo "marzo";
                    break;
                    case '4':
                        echo "abril";
                        break;
                        case '5':
                            echo "mayo";
                            break;
                            case '6':
                                echo "junio";
                                break;
                                case '7':
                                    echo "julio";
                                    break;
                                    case '8':
                                        echo "agosto";
                                        break;
                                        case '9':
                                            echo "septiembre";
                                            break;
                                            case '10':
                                                echo "octubre";
                                                break;
                                                case '11':
                                                    echo "noviembre";
                                                    break;
                                                    case '12':
                                                        echo "diciembre";
                                                        break;
        
        default:
            echo "no existe";
            break;
    }
}
$numero1 = readline("ingrese el numero");
figo($numero1);
?>