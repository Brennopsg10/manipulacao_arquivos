<?php

$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivosCSV = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(utf8_decode(($curso))), 'Sim'];
    fputcsv($arquivosCSV, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(utf8_decode(($curso))), utf8_decode('Não')];
    fputcsv($arquivosCSV, $linha, ';');
}
fclose($arquivosCSV);
