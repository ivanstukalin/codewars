<?php
function find_reverse_number($n): string {
    $f = substr($n,0,2);
    $part1_1 = ($f - 10**($f>10));
    $part1_2 = substr($n,2);
    $part1   = $part1_1.$part1_2;
    $lengthParam = strlen($part1);
    if (!(10<$f && $f<20)) { //If number have been formated from first and second decimanls of the number less then 10 and bigger then 20
        $lengthParam -= 1;
    }
    $part2 = strrev(substr($part1, 0, $lengthParam));
    return $part1.$part2;
}

function find_reverse_number_v2(string $n){
    $key = (int)$n;
    $del = 9;
    if ($key <= 10) {
        return $key - 1 ;
    }

    if ($key < 20) {
        return ($key - 10) * 11;
    }

    $key = $key - 10;
    $i = 1;

    while($key >= $del){
        $key = $key - $del;
        $i++;
        if($i%2 === 0)
            $del = $del * 10;
    }

    $i++;
    $mask   = pow(10, floor(($i-1)/2)) + $key - 1;
    $result = null;

    if ($i % 2 === 0) {
        return "{$mask}".strrev((string)$mask);
    }
    else {
        return "{$mask}".strrev((string)floor(($mask/10)));
    }
}