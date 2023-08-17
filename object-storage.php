<?php

require __DIR__ . "/Course.php";
require __DIR__ . "/Student.php";

$course = new Course("Novo curso de PHP");

$joana = new Student("Joana");

$course->registerStudent($joana);
$course->registerStudent(new Student("Vinicius"));
$course->registerStudent(new Student("Carlos"));
$course->registerStudent($joana);

var_dump($course->getRegisteredStudents());