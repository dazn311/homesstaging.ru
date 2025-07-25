<?php
declare(strict_types=1);

/** @var PDO[] $connections */
$connection = require 'mysql_connection.php';

$email = 'registration55@gmail.com';
$name = 'Sasha';
$password = '12345';
$remember_me = '1';
$createDate = date('Y-m-d H:i:s');

$query = "INSERT INTO `users` ( `email`, `name`, `password`,`remember_me`, `role`, `createDate`) VALUES (:email, :name, :password,:remember_me, :role , NOW());";
$sth = $connection->prepare($query);
$sth->execute([
    'email' => $email,
    'name' => $name,
    'password' => password_hash($password, PASSWORD_DEFAULT),
    'remember_me' => $remember_me,
    'role' => 0,
    'createDate' => $createDate,
]);
//var_dump($connection->lastInsertId());