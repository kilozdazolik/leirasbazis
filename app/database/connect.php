<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'leirasbazis';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Sikertelen csatlakozás az adatbázishoz: ' . $conn->connect_error);
}