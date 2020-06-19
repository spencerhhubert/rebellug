<?php

require_once realpath(dirname(__DIR__, 1) . "/vendor/autoload.php");
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(dirname(__DIR__, 1));
    $dotenv->load();

$dbServerName = getenv("dbServerName");
$dbUsername = getenv("dbUsername");
$dbPassword = getenv("dbPassword");
$dbName = getenv("dbName");

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

?>