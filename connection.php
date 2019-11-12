<?php

$dsn = 'mysql:dbname=lesson9;host=db;charset=utf8';
$user = 'user';
$password = 'passwd';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}