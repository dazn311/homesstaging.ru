<?php

declare(strict_types=1);

/** @var PDO[] $connections */
$pdo = require 'mysql_connection.php';

$sth = $pdo->prepare('DELETE FROM users WHERE id = :id');
$sth->execute(['id' => 1]);
