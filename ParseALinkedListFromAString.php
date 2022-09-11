<?php
function parse(string $string) {
    $array = explode(' -> ', $string);
    if ($array[0] === "NULL") {
        return null;
    }
    $result = new Node((int)$array[0]);
    unset($array[0]);
    $currentNode = $result;
    foreach ($array as $element) {
        if ($element === "NULL") {
            break;
        }
        $newNode = new Node((int)$element);
        $currentNode->next = $newNode;
        $currentNode = $newNode;
    }
    return $result;
}