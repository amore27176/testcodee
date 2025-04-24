<?php

return [
    'host' => 'mysql',
    'dbname' => 'myapp',
    'username' => 'root',
    'password' => 'secret',
    'charset' => 'utf8mb4',
    'options' => [
        // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ],
];
