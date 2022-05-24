<?php

$arquivoCuros = new SplFileObject('cursos.csv');

while (!$arquivoCuros->eof()) {
    $linha = $arquivoCuros->fgetcsv(';');
    echo utf8_encode($linha[0]) . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivoCuros->getCTime());

echo $date->format('d/m/Y');
