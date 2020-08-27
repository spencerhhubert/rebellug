<?php

$dbServerName = getenv("dbServerName");
$dbUsername = getenv("dbUsername");
$dbPassword = getenv("dbPassword");
$dbName = getenv("dbName");

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

?>