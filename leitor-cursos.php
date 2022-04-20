<?php

$arquivo = fopen('lista-cursos.txt', 'r');

//transforma as linhas em array---------------
$cursos = file('lista-cursos.txt');
var_dump($cursos);
//-----------------------------

//Modo mais simple de fazer leitura-----------------------------------------------------
//$cursos = file_get_contents('lista-cursos.txt');
//-----------------------------------------------------------

// ---Ler determinada quantidade de byts---
// $tamanhoArquivo = filesize('lista-cursos.txt');
// $cursos = fread($arquivo, $tamanhoArquivo);
//-----------------------------


// //--------Ler linha por linha---------------------------------------------------
// while (!feof($arquivo)) {
//     $curso = fgets($arquivo);
//     echo $curso;
// }
//-----------------------------------------------------------

fclose($arquivo);

// $cursos = file('lista-cursos.txt');

// var_dump($cursos);
