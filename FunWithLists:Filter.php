<?php
function filter($head, $p) {
    if ($head !== null) {
        return $p($head->data) ? new Node($head->data, filter($head->next, $p)) : filter($head->next, $p);
    }
    return null;
}