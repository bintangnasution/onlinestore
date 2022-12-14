<?php
include'connection.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));
$kd_produk= $_POST['kd_produk'];
$id_jenis = $_POST['id_jenis'];
$nama=$_POST['nama'];
$satuan = $_POST['satuan'];
$deskripsi = $_POST['deskripsi'];
$berat = $_POST['berat'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$rating = $_POST['rating'];

$namafile = $_FILES['gambar']['name'];

$namasementara = $_FILES['gambar']['tmp_name'];
$direktori_simpan = 'uploads/';
$tanggal_ditambahkan= date("d-m-y");

$tersimpan = move_uploaded_file($namasementara,$direktori_simpan.$namafile);

$target_file = $direktori_simpan . basename($_FILES["gambar"]["name"]);
$tipeimage = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Allow certain file formats
if($tipeimage != "jpg" && $tipeimage != "png" && $tipeimage != "jpeg"
&& $tipeimage != "gif" ) {
  $tersimpan = true;
}


if ($tersimpan) {

}
$sql = "UPDATE produk SET kd_produk = '$kd_produk', id_jenis= '$id_jenis', nama ='$nama', satuan = '$satuan', deskripsi ='$deskripsi', berat ='$berat',harga= '$harga',stok ='$stok',rating='$rating',gambar='$namafile',tanggal_ditambahkan='$tanggal_ditambahkan' WHERE kd_produk = '$kd_produk' ";

if ($conn->query($sql) === TRUE) {
  $filelama = $_POST['filelama'];
  if ($filelama<0) {
    $tersimpan = move_uploaded_file($namasementara,$direktori_simpan.$filelama);
    header("Location: https://bintangnasution.000webhostapp.com/pages/show_item.php");
    die();
  }else{
    $tersimpan = move_uploaded_file($namasementara,$direktori_simpan.$namafile);
    $filelama = $_POST['filelama'];
    unlink($direktori_simpan. $filelama);
    header("Location: https://bintangnasution.000webhostapp.com/pages/show_item.php");
    die();
  }

  if ($tersimpan) {
  }else{
    header("Location: https://bintangnasution.000webhostapp.com/pages/show_item.php");
    die();
  }
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>