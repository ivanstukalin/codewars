<?php
function narcissistic(int $value): bool {
    $digits        = str_split($value);
    $exponent      = count($digits);
    $sumOfExponent = 0;
    foreach($digits as $digit) {
        $sumOfExponent += pow($digit, $exponent);
    }
    return $sumOfExponent === $value ? "{$value} is narcissistic" : false;
}