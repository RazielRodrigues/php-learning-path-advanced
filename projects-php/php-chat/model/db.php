<?php
//TODO: CONSTRUCT A CLASS
$servername = "us-cdbr-east-05.cleardb.net";
$username = "bfff28e7229e4b";
$password = "bef6c00e";

try {
  $chatDB = new PDO("mysql:host=$servername;dbname=heroku_201a8405690d62f", $username, $password);
  // set the PDO error mode to exception
  $chatDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}