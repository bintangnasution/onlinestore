<?php
include"../action/connection.php";
$nama = $_GET['nama'];

if($_GET['ganti']==1){
  $sql="UPDATE pengguna SET role = '2' WHERE nama='$nama'; ";

  if ($conn->query($sql) === TRUE) {
    header("Location: https://bintangnasution.000webhostapp.com/pages/edit_role.php");
    die();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
  }

}elseif($_GET['ganti']==2){
  $sql="UPDATE pengguna SET role = '1' WHERE nama='$nama'; ";
  if ($conn->query($sql) === TRUE) {
    header("Location: https://bintangnasution.000webhostapp.com/pages/edit_role.php");
    die();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
  }
}else{
  die();
}


?>