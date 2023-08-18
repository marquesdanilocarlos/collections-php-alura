<?php

/**
 * Uso do Object Storage como Maps
 */

use Ds\Map;

require_once __DIR__ . "/Video.php";

$video1 = new Video("Aprendendo mapas");
$video2 = new Video("Aprendendo conjuntos");
$video3 = new Video("Aprendendo filas");

$watchedVideos = new Map();

$watchedVideos->put($video1, new DateTimeImmutable("2023-08-17"));
$watchedVideos->put($video2, new DateTimeImmutable("2023-08-16"));
$watchedVideos->put($video3, new DateTimeImmutable("2023-09-01"));


$watchedVideos->get($video1)->format("d/m/Y");

$watchedVideos->sort();

var_dump($watchedVideos->first());

/*$watchedVideos = [
    spl_object_hash($video1) => new DateTimeImmutable("2023-08-17"),
    spl_object_hash($video2) => new DateTimeImmutable("2023-08-16")
];*/

/**
 * @var Video $video
 * @var DateTimeImmutable $data
 */
foreach ($watchedVideos as $video => $data) {
    echo $video->getTitle() . "-" . $data->format("d/m/Y") . PHP_EOL;
}


