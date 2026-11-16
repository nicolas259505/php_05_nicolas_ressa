<?php

$arr = [1 , 15, 68, 9, 82, 100, 22, 5, 11, 16, 21, 7, 12, 8, 77, 14];

$acc = 0;
$conta = 0;

foreach ($arr as $a) {
    if ($a % 2 == 0) {
        $acc ++;
        $conta = $conta + $a;
        echo "Il numero " . $a . " è pari \n";
    }

}

$media = $conta / $acc;

echo "La media dei numeri pari è " . $media;