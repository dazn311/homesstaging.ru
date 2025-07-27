<?php

declare(strict_types=1);

$mysql = require '../connectPDO.php';

$mysql->exec("create table if not exists users (
                    id int primary key auto_increment, 
                    email varchar(255), 
                    name varchar(255), 
                    password varchar(255),
                    createDate timestamp,
                    remember_me varchar(255),
                    role int default 0
                )"
);
