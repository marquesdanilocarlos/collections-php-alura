<?php

/**
 * Pilha: conceito FIFO - First In, first out
 */

require __DIR__ . "/Curso.php";

$course = new Curso("SOLID com PHP");

$course->addWaitingStudent("Danilo");
$course->addWaitingStudent("Samara");
$course->addWaitingStudent("Pedro");
$course->addWaitingStudent("Luana");

foreach ($course->getWaitingList() as $student) {
    echo $student . PHP_EOL;
}