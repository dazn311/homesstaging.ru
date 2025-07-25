<?php

declare(strict_types=1);

/** @var PDO[] $connections */
$pdo = require 'mysql_connection.php';

$users = generateUsers(10);

$sth = $pdo->prepare('INSERT INTO users (email, name, password, remember_me, role) values (:email, :name, :password, :remember_me, :role)');
foreach ($users as $user) {
    $sth->execute($user);
}

function generateUsers(int $count): array
{
    $result = [];
    for($i = 0; $i < $count; $i++) {
        $result[] = [
            'email' => "daz{$i}@gmail.com",
            'name' => "daz{$i}",
            'password' => password_hash('12345', PASSWORD_DEFAULT),
            'remember_me' => false,
            'role' => 0
        ];
    }
    return $result;
}
