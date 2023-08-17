<?php

/**
 * Para alocar itens de array na memória, o PHP utilizando a potenciação de 2
 * Adicionar um item ao array = 2**1
 * Adicionar dois itens ao array = 2**2
 * Adicionar dois itens ao array = 2**3
 * Ou seja a alocação de memória do PHP para os itens do array cresce exponencialmente para cada novo item a ser adicionado,
 * fazendo com que a alocação seja muito maior do que a quantidade de intens que precisam ser adicionados.
 */

$array = [];

for ($i = 0; $i < 32769; $i++) {
    $array[$i] = $i;
}

var_dump(memory_get_usage() / 1024 / 1024);