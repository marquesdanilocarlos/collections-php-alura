<?php

$list = new SplDoublyLinkedList();

for ($i = 0; $i < 100; $i++) {
    $list->push($i);
}

$list->add(50, "Danilo");

var_dump($list, memory_get_usage() / 1024 / 1024);