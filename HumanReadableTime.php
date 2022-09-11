<?php
function human_readable($seconds) {
    $hoursPart = '00';
    $seconds = (int)$seconds;
    $hours = intdiv($seconds, 3600);
    $hours = $hours > 0
        ? $hours > 9 ? (string)$hours : "0{$hours}"
        : "00";
    $minutes = intdiv($seconds%3600, 60);
    $minutes = $minutes > 0
        ? $minutes > 9 ? (string)$minutes : "0{$minutes}"
        : "00";
    $lastSeconds = $seconds%60;
    $lastSeconds = $lastSeconds > 9 ? $lastSeconds : "0{$lastSeconds}";


    return "{$hours}:{$minutes}:{$lastSeconds}";
}