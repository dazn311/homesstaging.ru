<?php

declare(strict_types=1);

$pgsql = require 'pgsql_connection.php';

$pgsql->exec("create table IF not exists users (
                    id serial primary key, 
                    email varchar(45), 
                    password varchar(255)
                )"
);

