<?php

declare(strict_types=1);

$sqlite = require 'sqlite_connection.php';

$sqlite->exec("create table IF not exists users (
                    id integer primary key autoincrement, 
                    email varchar(45), 
                    password varchar(255)
                )"
);
