<?php
include "connection.php";
$getinfo_one = $_GET['delrow'];
$getinfo_two = $_GET['kd'];

$sql = "DELETE FROM produk WHERE id_jenis = '$getinfo_one' AND kd_produk = '$getinfo_two' ;";

if ($conn->query($sql) === TRUE) {
  header("Location:https://bintangnasution.000webhostapp.com/pages/show_item.php");
  die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
