<?php
$a= 0;
for ($i=0; $i <= 5 ;$i++) { 
    while ($a <= $i) {
        echo "*";
        $a++;
    }
    echo "<BR>";
    $a=0;
}
$a= 0;
for ($i=4; $i >= 0 ;$i--) { 
    while ($a <= $i) {
        echo "*";
        $a++;
    }
    echo "<BR>";
    $a=0;
}
?>