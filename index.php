<?php
// creo un array con numeri a caso
$arr = [1 , 15, 68, 9, 82, 100, 22, 5, 11, 16, 21, 7, 12, 8, 77, 14];

// variabile per contare i numeri pari
$acc = 0;
// variabile per sommare i numeri pari
$conta = 0;

foreach ($arr as $a) {
    if ($a % 2 == 0) {
        // incremento contatore ogni volta che trovo un numero pari
        $acc ++;
        // aggiungo il numero pari ogni volta che viene trovato 
        $conta = $conta + $a;
        echo "Il numero " . $a . " è pari \n";
    }

}

$media = $conta / $acc;

echo "La media dei numeri pari è " . $media;