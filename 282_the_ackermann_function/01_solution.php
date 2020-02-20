<?php

ini_set('xdebug.max_nesting_level', 1000000);
ini_set('max_execution_time', 300);

// this function is called so many times it's ridiculous
// at solution(2) -> 81
// at solution(3) -> over 8000
// at solution(4) -> it gets stuck, I need to write a c++ program
function ackermann(int $m, int $n) {

    if ($m === 0) {
        return $n + 1;
    }


    if ($m > 0) {
        if ($n === 0) {
            return ackermann($m - 1, 1);
        }

        if ($n > 0) {
            return ackermann($m - 1, ackermann($m, $n - 1));
        }
    }
}

function solution(int $n) {
    $sum = 0;
    for ($i=0; $i<=$n; $i++) {
        $sum += ackermann($n, $n);
    }

    return $sum;
}

echo solution(2);
