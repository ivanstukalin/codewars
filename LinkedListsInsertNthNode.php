<?php
function insert_nth($head, $index, $data) {
    if ($index === 0) {
        return new Node($data, $head);
    }
    $currentIndex = 0;
    $currentNode  = $head;
    while ($currentIndex !== $index-1) {
        $currentNode = $currentNode->next;
        if ($currentNode === null) {
            throw new InvalidArgumentException();
        }
        $currentIndex++;
    }
    $currentNode->next = new Node($data, $currentNode->next);
    return $head;
}