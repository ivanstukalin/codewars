<?php
function beeramid($bonus, $price) {
    $level = 0;
    while(($bonus - $price * ($level+1)**2) >= 0) {
        $bonus = $bonus - $price * ($level+1)**2;
        $level++;
    }
    return $level;
}