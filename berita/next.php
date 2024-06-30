<!-- Panggil file koneksi, karena kita membutuhkan nya -->
<?php
  include "../koneksi.php";

?>
<script type="text/javascript" src="assets/js/ruang-admin.min.js"></script>
<script type="text/javascript" src="assets/js/ruang-admin.min.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../assets/img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/ruang-admin.min.css" rel="stylesheet">
</head>
<div class="row">
            <!-- Datatables -->
            <a href="tambah_brt.php"><button>Tambah</button></a>
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
          
            <th scope="col">ID Berita</th>
            <th scope="col">nama_kategori</th>
            <th scope="col">Nama Villa</th>
            <th scope="col">Harga</th>
            <th scope="col">Kamar</th>            
            <th scope="col">luas</th>
            <th scope="col">lantai</th>
            <th scope="col">parkir</th>
            <th scope="col">deskripsi</th>
            <th scope="col">Gambar Berita</th>
            <th scope="col">Video Berita</th>
            <th scope="col">Aksi</th>
          
          </tr>
        </thead>
		
          <?php
              
              $no = 1;
              // Simpan query kita kedalam variable agar lebih rapi, dan bisa reusable.
              // Arti dari query di bawah adalah pilih semua data dari table tb_siswa.
              $result =  mysqli_query($koneksi, "SELECT * FROM tb_villa
              JOIN tb_kategori ON tb_villa.id_kategori=tb_kategori.id_kategori
              ORDER BY id_villa DESC");
            
          ?>
        <tbody>
  <?php
    if ($result && mysqli_num_rows($result) > 0) {
      while ($data = mysqli_fetch_assoc($result)) {
        echo "
          <tr>
            <td>" . $data["id_villa"] . "</td>
            <td>" .$data["nama_kategori"]."</td>
            <td>" . $data["nama"] . "</td>
            <td>" . $data["harga"] . "</td>
            <td>" . $data["kamar"] . "</td>
            <td>" . $data["kamarmandi"] . "</td>
            <td>" . $data["luas"] . "</td>
            <td>" . $data["lantai"] . "</td>
            <td>" . $data["parkir"] . "</td>
            <td>" . $data["deskripsi"] . "</td>
            <td>" . $data["slug"] . "</td>
            
            <td><img src='../assets1/images/" . $data["gambar"] . "' width='100px' alt=''></td>
            <td>" . $data["file_video"] . "</td>

            <td> 
              <a href='update_brt.php?id_villa=" . $data["id_villa"] . "' class='btn btn-success'>Update</a>
              <a href='delete_brt.php?id_villa=" . $data["id_villa"] . "' class='btn btn-danger' onclick='return confirm(\"Yakin ingin menghapus data?\")'>Delete</a>
            </td>
          <td>
        
        ";
      }
    } else {
      echo "<tr><td colspan='3'>No data found</td></tr>";
    }
  ?>
</tbody>
