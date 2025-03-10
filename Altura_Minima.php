<?php

$brinquedos = 6;
$altura = 120;
$alturas_minimas = [200, 90, 100, 123, 120, 169];

$contator = 0;

foreach ($alturas_minimas as $alturas_minima) {
    if ($altura >= $alturas_minima) {
        $contator++;
    }
}

   echo $contator . "\n";
?>
