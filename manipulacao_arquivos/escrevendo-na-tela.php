<?php

$from = fopen('zip://arquivos.zip#lista-cursos.txt', 'r');
// $to = fopen('cursos.php', 'w');

stream_copy_to_stream($from, STDOUT);
