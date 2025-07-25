<?php

declare(strict_types=1);

// рекомендуемые МНОЙ параметры
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_STRINGIFY_FETCHES => false,
    PDO::ATTR_EMULATE_PREPARES => false,
];

//$options = [];

$dsn = "mysql:host=mysql;dbname=example;port:3309;charset=utf8mb4";
return new PDO($dsn, 'root', '12345', $options);
