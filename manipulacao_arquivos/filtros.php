<?php

$arquivo = fopen('lista-cursos.txt', 'r');

stream_filter_append($arquivo, 'string.toupper');

echo fread($arquivo, filesize('lista-cursos.txt'));
