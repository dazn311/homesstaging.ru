<?php

declare(strict_types=1);

/** @var PDO[] $connections */
$pdo = require 'mysql_connection.php';

$sth = $pdo->prepare("UPDATE users SET password = :password WHERE id = :id");
$sth->execute([
    'password' => password_hash('54321', PASSWORD_DEFAULT),
    'id' => 2
]);
