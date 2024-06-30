<?php
  include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Tambah data</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">Form Tambah Data</h1>
      <form method="POST">
        <div class="mb-3">
          <label for="nama_kategori" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Masukan Nama Kategori">
        </div>
        <input name="simpan" type="submit" class="btn btn-primary" value="Tambah">
        <a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['simpan'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $nama_kategori = $_POST['nama_kategori'];
      

      // Membuat Query
      $query = mysqli_query($koneksi,"INSERT INTO tb_kategori (nama_kategori) VALUES('$nama_kategori')");

    

      if($query){
       
        exit(); // Add exit() to stop further execution
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

</body>
</html>
