<?php

/**
 * Uso do Object Storage como Maps
 */

require_once __DIR__ . "/Video.php";

$video1 = new Video("Aprendendo mapas");
$video2 = new Video("Aprendendo conjuntos");

$watchedVideos = new SplObjectStorage();

$watchedVideos->attach($video1, new DateTimeImmutable("2023-08-17"));
$watchedVideos[$video2] = new DateTimeImmutable("2023-08-16");

/*$watchedVideos = [
    spl_object_hash($video1) => new DateTimeImmutable("2023-08-17"),
    spl_object_hash($video2) => new DateTimeImmutable("2023-08-16")
];*/

foreach ($watchedVideos as $video) {
    echo $watchedVideos[$video]->format("d/m/Y") . PHP_EOL;
}


