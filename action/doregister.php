<?php
include"connection.php";

$id = " ";
$nama = $_POST[htmlspecialchars('nama_depan')].' '.$_POST[htmlspecialchars('nama_belakang')];
$email= $_POST[htmlspecialchars('email')];
if($_POST['password'] != $_POST['konf_password']){
  header("Location: https://bintangnasution.000webhostapp.com/pages/register.php?unmatch_pass");
  die();
}else{
  $secure_password= password_hash($_POST[htmlspecialchars('password')],PASSWORD_DEFAULT);
}
$role= 2;

$sql ="
      INSERT INTO pengguna(id,nama,email,password,role)VALUES(NULL,'$nama','$email','$secure_password','$role');
      ";

if ($conn->query($sql) === TRUE) {
        header("Location: https://bintangnasution.000webhostapp.com/pages/login.php");
        die();
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}
      
$conn->close();

?>