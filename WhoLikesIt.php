<?php
function likes($names ) {
    $base       = "likes this";
    $namesCount = count($names);
    if ($namesCount <= 1) {
        return $namesCount === 1 ? "{$names[0]} {$base}" : "no one {$base}";
    }

    $firstPart  = $namesCount > 2 ? "{$names[0]}, {$names[1]}" : $names[0];
    $othersCount = $namesCount-2;
    $secondPart  = $othersCount <= 1 ? $names[$othersCount + 1] : "{$othersCount} others";
    return "{$firstPart} and {$secondPart} like this";
}