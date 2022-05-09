<?php

$contexto = stream_context_create([
    'http' => [
        'method'    => 'POST',
        'header'    => 'X-From: PHP',
        'content'   => 'Teste de corpo de requisição',
    ]
]);

echo file_get_contents('http://httpbin.org/post', false, $contexto);

// $contexto = stream_context_create([
//     'http' => [
//         'method' => 'DELETE',
//         'header' => 'X-From: PHP'
//     ]
// ]);

// echo file_get_contents('http://httpbin.org/delete', false, $contexto);
