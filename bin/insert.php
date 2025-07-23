<?php

declare(strict_types=1);

/** @var PDO[] $connections */
$connections[] = require 'mysql_connection.php';
//$connections[] = require 'pgsql_connection.php';
//$connections[] = require 'sqlite_connection.php';

$users = generateUsers(10);

foreach ($connections as $pdo) {
    $sth = $pdo->prepare('INSERT INTO users (email, password) values (:email, :password)');
    foreach ($users as $user) {
        $sth->execute($user);
    }
}

function generateUsers(int $count): array
{
    $result = [];
    for($i = 0; $i < $count; $i++) {
        $result[] = [
            'email' => "daz{$i}@gmail.com",
            'password' => password_hash('12345', PASSWORD_DEFAULT)
        ];
    }
    return $result;
}
