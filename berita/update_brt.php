<?php
  include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Update data</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

<section class="row">
  <div class="col-md-6 offset-md-3 align-self-center"> 
    <h1 class="text-center mt-4">Form Update Data</h1>
    <form method="POST">
      <?php
        // Ambil data dari parameter URL browser
        $id_berita = $_GET['id_berita'];

        // Query ambil data dari parameter jika ada.
        $query = "SELECT * FROM tb_berita WHERE id_berita = $id_berita";
        // Hasil Query
        $result = mysqli_query($koneksi, $query);
        if ($result && mysqli_num_rows($result) > 0) {
          $data = mysqli_fetch_assoc($result);
      ?>
      <!-- Inputan tersembunyi untuk menyimpan data id yang digunakan untuk mengupdate data, lebih aman di banding menggunakan id dari params -->
      <input type="hidden" value="<?= $data['id_berita'] ?>" name="id_berita">
      <div class="mb-3">
        <label for="judul_berita" class="form-label">Judul Berita</label>
        <input type="text" class="form-control" id="judul_berita" value="<?= $data['judul_berita'] ?>" name="judul_berita" placeholder="Masukan Judul Berita">
      </div>
      
      <input name="daftar" type="submit" class="btn btn-primary" value="Update">
      <a href="next.php" type="button" class="btn btn-info text-white">Kembali</a>
    </form>
  </div>
</section>

<?php
    }
  // Buat kondisi jika tombol data di klik
  if(isset($_POST['daftar'])){
    // Membuat variable setiap field inputan agar kodingan lebih rapi.
    $id_berita = $_POST['id_berita'];
    $judul_berita = $_POST['judul_berita'];

    // Membuat Query
    $query = "UPDATE tb_berita SET judul_berita = '$judul_berita' WHERE id_berita = $id_berita";
    $result = mysqli_query($koneksi, $query);

    if($result){
      header("location: next.php");
    } else {
      echo "<script>alert('Data Gagal di update!')</script>";
    }
  }    
?>

</body>
</html>
