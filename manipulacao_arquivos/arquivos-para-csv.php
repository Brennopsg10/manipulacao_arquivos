<?php

$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivosCSV = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim($curso), 'Sim'];
    fputcsv($arquivosCSV, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim($curso), 'Não'];
    fputcsv($arquivosCSV, $linha, ';');
}
fclose($arquivosCSV);
