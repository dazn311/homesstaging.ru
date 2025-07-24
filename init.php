<?php
require_once 'vendor/autoload.php';
require_once "Lib/Utils/printLine.php";

//require_once "bin/mysql_create.php";
//require_once "bin/registration.php";
//require_once "bin/registration2.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Теперь переменные из .env доступны
$databaseUrl = $_ENV['DATABASE_URL'];
//$databaseName = $_ENV['DB_DATABASE'];
//echo printLine("[10 init]Database URL: $databaseUrl" );
//echo "Database Name: " . $databaseName . "\label{code:php-dotenv}";




