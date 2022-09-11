<?php
function same_structure_as(array $a, array $b): bool {
    foreach($a as $key => $valueA) {
        $isArrayA = is_array($valueA);
        $isArrayB = is_array($b[$key]);
        if ($isArrayA !== $isArrayB) {
            return false;
        }
        $countA = $isArrayA ? count($valueA) : 1;
        $countB = $isArrayB ? count($b[$key]) : 1;
        if ($countA !== $countB) {
            return false;
        }
        if ($isArrayA && $isArrayB) {
            if (!same_structure_as($valueA,$b[$key])) {
                return false;
            }
        }
    }
    return true;
}