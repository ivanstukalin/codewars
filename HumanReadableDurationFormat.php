<?php
function format_duration($seconds) {
    if ($seconds < 1) {
        return 'now';
    }
    $years = intdiv($seconds, 31536000);
    $yearsS = $years > 0
        ? $years > 1 ? "$years years" : "$years year"
        : "";
    $seconds = $seconds - $years * 31536000;
    $days    = intdiv($seconds, 86400);
    $daysS   = $days > 0
        ? $days > 1 ? "$days days" : "$days day"
        : "";
    $seconds = $seconds - $days * 86400;
    $hours    = intdiv($seconds,3600);
    $hoursS   = $hours > 0
        ? $hours > 1 ? "$hours hours" : "$hours hour"
        : "";

    $minutes  = intdiv(($seconds-$hours*3600),60);
    $minutesS = $minutes > 0
        ? $minutes > 1 ? "$minutes minutes" : "$minutes minute"
        : "";
    $seconds = $seconds%60;
    $secondsS = $seconds > 0
        ? $seconds > 1 ? "$seconds seconds" : "$seconds second"
        : "";
    $delimetr = ',';
    $result = $years > 0 ? $yearsS : '';
    $delimetr = $hours > 0 ? ',' : ' and';
    $result = $days > 0
        ? empty($result) ? $daysS : "{$result}{$delimetr} $daysS"
        : $result;
    $delimetr = $minutes > 0 ? ',' : ' and';
    $result = $hours > 0
        ? empty($result) ? $hoursS : "{$result}{$delimetr} $hoursS"
        : $result;
    $delimetr = $seconds > 0 ? ',' : ' and';
    $result = $minutes > 0
        ? empty($result) ? $minutesS : "{$result}{$delimetr} $minutesS"
        : $result;
    $delimetr = ' and';
    $result = $seconds > 0
        ? !empty($result) ? "{$result}{$delimetr} $secondsS" : $secondsS
        : $result;
    return $result;
}