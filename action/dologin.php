<?php
include"pdoconnection.php";


$login = FALSE;

$email = $_POST[htmlspecialchars('email')];
$password = $_POST[htmlspecialchars('password')];

$sql = 'SELECT * FROM pengguna WHERE role=1 AND (email = :email)';
$values = [':email' => $email];
try{
  $res = $conn->prepare($sql);
  $res->execute($values);
}catch (PDOException $e){
  echo 'Query error.';
  die();
}
$row = $res->fetch(PDO::FETCH_ASSOC);
if (is_array($row)){
  if (password_verify($password, $row['password'])){
    $login = TRUE;
  }
}

if ($login==1) {
  session_start();
  $_SESSION["is_login"] = "true";
  header("Location: https://bintangnasution.000webhostapp.com/pages/dashboard.php");
  die();
}else{
  header("Location: https://bintangnasution.000webhostapp.com/pages/login.php?unreg");
  die();
}

?>