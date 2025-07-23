<?php

declare(strict_types=1);

/** @var PDO[] $connections */
$connections[] = require 'mysql_connection.php';
$connections[] = require 'pgsql_connection.php';
$connections[] = require 'sqlite_connection.php';

foreach ($connections as $pdo) {
    $sth = $pdo->prepare("UPDATE users SET password = :newpassword WHERE id = :id");
    $sth->execute([
        'newpassword' => password_hash('54321', PASSWORD_DEFAULT),
        'id' => 2
    ]);
}
