<?php

declare(strict_types=1);

/** @var PDO[] $connections */
$connections[] = require 'mysql_connection.php';
$connections[] = require 'pgsql_connection.php';
$connections[] = require 'sqlite_connection.php';

foreach ($connections as $pdo) {
    $sth = $pdo->query('SELECT * FROM users LIMIT 2');
    while ($row = $sth->fetch()) {
        var_dump($row);
    }
}
