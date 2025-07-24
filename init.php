<?php
require_once 'vendor/autoload.php';
require "Lib/Utils/printLine.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Теперь переменные из .env доступны
$databaseUrl = $_ENV['DATABASE_URL'];
//$databaseName = $_ENV['DB_DATABASE'];
echo printLine("[10 init]Database URL: $databaseUrl" );
//echo "Database Name: " . $databaseName . "\label{code:php-dotenv}";



