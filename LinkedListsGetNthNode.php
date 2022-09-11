<?php
class Node {
    public $data, $next;
    public function __construct($data, $next = NULL) {
        $this->data = $data;
        $this->next = $next;
    }
}

function get_nth($node, $index) {
    if ($node === NULL) {
        throw new InvalidArgumentException();
    }
    return $index === 0 ? $node->data : get_nth($node->next, $index-1);
}