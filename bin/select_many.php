<?php

declare(strict_types=1);

/** @var PDO[] $connections */
$pdo = require 'mysql_connection.php';

$sth = $pdo->query('SELECT * FROM users LIMIT 2');
while ($row = $sth->fetch()) {
    var_dump($row);
}
