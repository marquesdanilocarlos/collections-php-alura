<?php

/**
 * Pilha: conceito LIFO - Last In, first out
 */

require __DIR__ . "/Curso.php";

$course = new Curso("Collections com PHP");
$course->addChange("Primeira aula criada");
$course->addChange("Segunda aula modificada");
$course->addChange("Terceira aula concluída");

$course->getChanges()->push("Alteração indevida");

foreach ($course->getChanges() as $change) {
    echo $change . PHP_EOL;
}