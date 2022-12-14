<?php include_once"../layout/header_dashboard.php";
      if (isset($_GET['file_err'])) {
        echo "<script>alert('Silahkan masukkan gambar produk');</script>";
      }
?>
<?php include"../action/connection.php";
  $getinfo_one = $_GET['editrow'];
  $getinfo_two = $_GET['kd'];
  $sql = "SELECT * FROM produk WHERE id_jenis = '$getinfo_one' AND kd_produk = '$getinfo_two'";

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>
    


                <main>
                  <div class="container">
                  <div class="card mt-2">
                  <div class="card-header ">
                    Form Edit Data Barang
                  </div>
                  <div class="card-body">

                  <form action="../action/doedit.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="kd_produk">Kode Barang</label>
                    <input type="text" class="form-control" id="kd_produk" name="kd_produk" value="<?php echo $row['kd_produk']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="id_jenis">No Jenis</label>
                    <input type="text" class="form-control" id="id_jenis" name="id_jenis" value="<?php echo $row['id_jenis'] ?>" placeholder="contoh : 01" >
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama'] ?>" placeholder="contoh : Deterjen" >
                  </div>
                  <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" class="form-control" id="satuan" name="satuan" value="<?php echo $row['satuan'] ?>" placeholder="contoh : ltr,pcs,etc" >
                  </div>
                  <div class="form-group">
                    <label for="berat">Berat</label>
                    <input type="text" class="form-control" id="berat" name="berat" value="<?php echo $row['berat'] ?>" placeholder="contoh : 1 ~" >
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $row['harga'] ?>" placeholder="contoh : 1 ~" >
                  </div>
                  <div class="form-group">
                    <label for="stok">Jumlah Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $row['stok'] ?>" placeholder="contoh : 50" >
                  </div>
                  <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" value="<?php echo $row['rating'] ?>" placeholder="contoh : 1 ~ 5" >
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi"  rows="3"><?php echo $row['deskripsi'] ?></textarea>
                  </div>
                  <div class="form-group mt-2">
                    <img src="../action/uploads/<?php echo $row['gambar'] ?>" alt="" width="100px">
                    <label for="foto">Tambahkan Foto Barang</label>
                    <input type="file" class="form-control-file" id="foto" name="gambar" value="<?php echo $row['gambar'] ?>" required>
                  </div>
                  <?php
                  echo "<input type='file' name='filelama' value='".$row['gambar']."' style='display:none;'></input>";
                  ?>
                  
                  <div class="d-flex flex-row-reverse">
                    <div class="p-2"><button type="submit" class="btn btn-primary mt-2"> Edit Data</button></div>
                  </div>
                  <?php    }}?>
                  </form>
                    
                  
                  
                  </div>
                  </div>
                  </div>

                </main>
<?php include_once"../layout/footer_dashboard.php";?>