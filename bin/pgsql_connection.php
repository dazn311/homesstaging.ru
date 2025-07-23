<?php

declare(strict_types=1);

// рекомендуемые МНОЙ параметры
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_STRINGIFY_FETCHES => false,
    PDO::ATTR_EMULATE_PREPARES => false
];

//$options = [];

$dsn = "pgsql:host=pgsql;dbname=postgres;options='--client_encoding=UTF8'";
return new PDO($dsn, 'postgres', '12345', $options);
