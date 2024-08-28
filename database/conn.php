<?php

$host = "localhost";
$dbname = "sgtc";
$username = "root";
$password = "";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
} catch (PDOException $e) {
  echo "Error: ".$e->getMessage();
}