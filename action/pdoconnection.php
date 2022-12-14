<?php
$servername = "localhost";
$username = "id19949556_bintangnasution";
$password = "QqqtjCd6fP[ewM2J";

try {
  $conn = new PDO("mysql:host=$servername;dbname=id19949556_db_penjualan", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>