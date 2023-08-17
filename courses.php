<?php

$courses = [
    "Introdução ao PHP",
    "SOLID com PHP",
    "Coleções em PHP"
];

//Add valores ao array
/*$courses[] = "Arrays em PHP";
array_push($courses, "Orientação a Objetos com PHP", "Object Calisthenics em PHP");*/

$coursesOO = ["Orientação a Objetos com PHP", "Object Calisthenics em PHP"];

$newCourses = array_merge($courses, $coursesOO);

$firstCourse = array_shift($newCourses);
$lastCourse = array_shift($newCourses);

array_unshift($newCourses, "PHP com PDO");

var_dump($newCourses, $firstCourse, $lastCourse);