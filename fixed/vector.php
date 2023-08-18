<?php

use Ds\Vector;

$vector = new Vector();
$vector->allocate(32769);

for ($i = 0; $i < 32769; $i++) {
    $vector->push($i);
}

var_dump(memory_get_usage() / 1024 / 1024);
