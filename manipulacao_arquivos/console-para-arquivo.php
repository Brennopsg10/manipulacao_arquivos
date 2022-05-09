<?php

// $teclado = fopen('php://stdin', 'r');

$novoCurso = trim(fgets(STDIN));
// console($novoCurso);
// exit;

file_put_contents('cursos.php', "\n$novoCurso", FILE_APPEND);
