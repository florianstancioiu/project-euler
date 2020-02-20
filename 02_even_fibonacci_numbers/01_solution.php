<?php

function solution() {
    $even_sum = 0;
    $x = 1;
    $n = 1;

    while ($n <= 4000000) {
        $aux = $n;
        $n += $x;
        $x = $aux;

        if ($n%2 === 0) {
            $even_sum += $n;
        }
    }

    return $even_sum;
}

echo solution();
