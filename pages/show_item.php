<?php include_once"../layout/header_dashboard.php";?>
<main>
  <br>
<?php include"../action/connection.php";?>
<div class="container">
<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>Data Produk</div>
    <div class="card-body">
      <table id="datatablesSimple">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Berat</th>
            <th>Kode</th>
            <th>Option</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Satuan</th>
              <th>Harga</th>
              <th>Berat</th>
              <th>Kode</th>
              <th>Option</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          $sql = "SELECT * FROM produk";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $no = 1;
            while($row = $result->fetch_assoc()) {
              echo"<tr>";
              echo "<td>".$no."</td>";
              echo "<td>".$row['nama']."</td>";
              echo "<td>".$row['satuan']."</td>";
              echo "<td>".$row['harga']."</td>";
              echo "<td>".$row['berat']."</td>";
              echo "<td>".$row['kd_produk']."</td>";
              echo "<td>";
              echo "<a href='../action/del.php?delrow=".$row['id_jenis']."&kd=".$row['kd_produk']."' style='color:white;'class='badge badge bg-danger text-decoration-none' onclick='return confirm(";
              echo'"Apakah anda ingin menghapus produk ini?"';
              echo ");'>Hapus</a> ";
              echo "<a href='form_edit.php?editrow=".$row['id_jenis']."&kd=".$row['kd_produk']."' style='color:white;'class='badge badge bg-primary text-decoration-none'>Edit</a>";
              echo "</td>";
              echo"</tr>";
              $no++;  
            }
          } else {
            echo "0 results";
          }
          ?>
        </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
</main>



<?php include_once"../layout/footer_dashboard.php";?>