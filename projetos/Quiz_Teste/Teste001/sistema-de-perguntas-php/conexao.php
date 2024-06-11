<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "banco_celke_teste";
$port = 3306;

$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);