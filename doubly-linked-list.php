<?php

$list = new SplDoublyLinkedList();

for ($i = 0; $i < 100; $i++) {
    $list->push($i);
}

$list->add(50, "Danilo");

var_dump($list, memory_get_usage() / 1024 / 1024);

/*require __DIR__ . "/Course.php";

$course = new Course("Curso de PHP");

$course->registerStudent("Joana");
$course->registerStudent("Vinicius");
$course->registerStudent("Carlos");
$course->registerStudent("Joana");

var_dump($course->getRegisteredStudents());*/
