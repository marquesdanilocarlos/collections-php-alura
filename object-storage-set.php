<?php

/**
 * Uso do Object Storage como conjuntos
 */

require __DIR__ . "/Course.php";
require __DIR__ . "/Student.php";

$course = new Course("Novo curso de PHP");

$course->registerStudent(new Student("Joana"));
$course->registerStudent(new Student("Vinicius"));
$course->registerStudent(new Student("Carlos"));
$course->registerStudent(new Student("Joana"));

var_dump($course->getRegisteredStudents());