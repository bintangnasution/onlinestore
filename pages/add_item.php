<?php include_once"../layout/header_dashboard.php";
      if (isset($_GET['file_err'])) {
        echo "<script>alert('Silahkan masukkan gambar produk');</script>";
      }
?>

                <main>
                  <div class="container">
                  <div class="card mt-2">
                  <div class="card-header ">
                    Form Data Barang
                  </div>
                  <div class="card-body">

                  <form action="../action/do_add_item.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="kd_produk">Kode Barang</label>
                    <input type="text" class="form-control" id="kd_produk" name="kd_produk" value="<?php echo rand(10,100);?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="id_jenis">No Jenis</label>
                    <input type="text" class="form-control" id="id_jenis" name="id_jenis" placeholder="contoh : 01" >
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="contoh : Deterjen" >
                  </div>
                  <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" class="form-control" id="satuan" name="satuan" placeholder="contoh : ltr,pcs,etc" >
                  </div>
                  <div class="form-group">
                    <label for="berat">Berat</label>
                    <input type="text" class="form-control" id="berat" name="berat" placeholder="contoh : 1 ~" >
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="contoh : 1 ~" >
                  </div>
                  <div class="form-group">
                    <label for="stok">Jumlah Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok" placeholder="contoh : 50" >
                  </div>
                  <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" placeholder="contoh : 1 ~ 5" >
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                  </div>
                  <div class="form-group mt-2">
                    <label for="foto">Tambahkan Foto Barang</label>
                    <input type="file" class="form-control-file" id="foto" name="gambar">
                  </div>
                  
                  <div class="d-flex flex-row-reverse">
                    <div class="p-2"><a href="" class="btn btn-warning mt-2"><i class="fa-solid fa-rotate-right"></i> Reset Data</a></div>
                    <div class="p-2"><button type="submit" class="btn btn-primary mt-2"><i class="fa-solid fa-plus"></i> Tambah Data</button></div>
                  </div>
                  </form>
                    
                  
                  
                  </div>
                  </div>
                  </div>

                </main>
<?php include_once"../layout/footer_dashboard.php";?>