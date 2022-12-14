<?php
include"connection.php";
$sql = "SELECT id,nama,role FROM pengguna ;";
$result= $conn->query($sql);
?>
<div class="container">
<table class=' table table-striped'>
  <th>No</th>
  <th>Nama</th>
  <th>Peran</th>
  <th>Aksi</th>

  <?php
  if ($result->num_rows>0) {
      $no=1;
      while ($row = $result->fetch_assoc()) {
        $cek_role = $row["role"] == 1 ? 'Admin' : 'Pengguna';
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$cek_role."</td>";
        echo "<td><a href='change-role.php?ganti=";
        echo $row['role'];
        echo "&nama=";
        echo $row['nama'];
        echo "'class='btn btn-primary'>Ubah</td>";
        echo "</tr>";
      }  
  }
  ?>
</table>
</div>
