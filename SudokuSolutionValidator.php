<?php
function valid_solution(array $m): bool {
    echo json_encode($m);
    $columns = [];
    $squaers = [];
    foreach ($m as $lineKey => $line) {
        if (count(array_unique($line)) !== 9) {
            return false;
        }
        $lineSquare = intdiv($lineKey, 3) * 3;
        foreach ($line as $coulumnKey => $value) {
            $columnSquare = intdiv($coulumnKey, 3);
            $columns[$coulumnKey][] = $value;
            if (count(array_unique($columns[$coulumnKey])) !== count($columns[$coulumnKey])) {
                return false;
            }
            $squareKey = $columnSquare + $lineSquare;
            $squaers[$columnSquare + $lineSquare][] = $value;
            if (count(array_unique($squaers[$columnSquare + $lineSquare])) !== count($squaers[$columnSquare + $lineSquare])) {
                return false;
            }
        }
    }
    return true;
}