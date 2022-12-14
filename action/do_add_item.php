<?php
include "connection.php";
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
  echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang boleh diunggah.";
  $tersimpan = false;

}


if ($tersimpan) {
}else{
  die();
}
$sql = "INSERT INTO produk(kd_produk,id_jenis,nama,satuan,deskripsi,berat,harga,stok,rating,gambar,tanggal_ditambahkan)
        VALUES('$kd_produk','$id_jenis','$nama','$satuan','$deskripsi','$berat','$harga','$stok','$rating','$namafile','$tanggal_ditambahkan');";

if ($conn->query($sql) === TRUE) {
  header("Location: https://bintangnasution.000webhostapp.com/pages/show_item.php");
  die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>