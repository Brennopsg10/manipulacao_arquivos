<?php

require 'MeuFiltro.php';

$arquivo = fopen('lista-cursos.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
stream_filter_append($arquivo, 'alura.partes');

echo fread($arquivo, filesize('lista-cursos.txt'));
