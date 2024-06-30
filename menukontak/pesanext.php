<?php
include "../koneksi.php";

// Query untuk menggabungkan data dari tb_villa dan tb_pesan
$result = mysqli_query($koneksi, "SELECT *
FROM tb_pesan
");

?>
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

<body>
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
                
                <th scope="col">Nama Villa</th>
                
                <th scope="col">Deskripsi</th>
                
                <th scope="col">Gambar Berita</th>
              
                <th scope="col">Nama Pemesan</th>
                <th scope="col">Email</th>
                <th scope="col">Masuk</th>
                <th scope="col">Keluar</th>
           
              </tr>
            </thead>
            <tbody>
              <?php
              if ($result && mysqli_num_rows($result) > 0) {
                while ($data = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <td><?= $data["id_villa"] ?></td>
                    <td><?= $data["detail"] ?></td>
                    <td><?= $data["deskripsi"] ?></td>
                    
                    <td><img src='../assets1/images/<?= $data["gambar"] ?>' width='100px' alt=''></td>
                    
                    <td><?= $data["nama_pemesan"] ? $data["nama_pemesan"] : "-" ?></td>
                    <td><?= $data["email"] ? $data["email"] : "-" ?></td>
                    <td><?= $data["masuk"] ? $data["masuk"] : "-" ?></td>
                    <td><?= $data["keluar"] ? $data["keluar"] : "-" ?></td>
                    <td>
                      <a href='update_brt.php?id_villa=<?= $data["id_villa"] ?>' class='btn btn-success'>Update</a>
                      <a href='delete_brt.php?id_villa=<?= $data["id_villa"] ?>' class='btn btn-danger' onclick='return confirm("Yakin ingin menghapus data?")'>Delete</a>
                    </td>
                  </tr>
              <?php
                }
              } else {
                echo "<tr><td colspan='17'>No data found</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional scripts -->
  <script type="text/javascript" src="assets/js/ruang-admin.min.js"></script>
</body>

</html>
