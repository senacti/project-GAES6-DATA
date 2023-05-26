<?php
$a = 0;
function figo($num = 0){
    $a=0; 
for ($i=0; $i <= $num; $i++) { 
    $a += $i;
    echo $a."\n";
}
}
$numero1 = readline("ingrese el numero");
figo($numero1);
?>