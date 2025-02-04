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

<?php
  // Ambil data dari parameter URL browser
  $id_kategori = $_GET['id_kategori'];

  // Query ambil data dari parameter jika ada.
  $query = "SELECT * FROM tb_kategori WHERE id_kategori = $id_kategori";
  // Hasil Query
  $result = mysqli_query($koneksi, $query);
  if ($result && mysqli_num_rows($result) > 0) {
      while ($data = mysqli_fetch_assoc($result)) {
        echo "
          <tr>
            <td>" . $data["id_kategori"] . "</td>
            <td>" . $data["nama_kategori"] . "</td>
            <td> ";
?>
<section class="row">
  <div class="col-md-6 offset-md-3 align-self-center"> 
    <h1 class="text-center mt-4">Form Update Data</h1>
    <form method="POST">
      <!-- Inputan tersembunyi untuk menyimpan data id yang digunakan untuk mengupdate data, lebih aman di banding menggunakan id dari params -->
      <input type="hidden" value="<?= $data['id_kategori'] ?>" name="id_kategori">
      <div class="mb-3">
        <label for="nama_kategori" class="form-label">Nama kategori</label>
        <input type="text" class="form-control" id="nama_kategori" value="<?= $data['nama_kategori'] ?>" name="nama_kategori" placeholder="Masukan Nama Kategori">
      </div>
      
      <input name="daftar" type="submit" class="btn btn-primary" value="Update">
      <a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
    </form>
  </div>
</section>

<?php 
    } 
  } 
?>

<?php
  // Buat kondisi jika tombol data di klik
  if(isset($_POST['daftar'])){
    // Membuat variable setiap field inputan agar kodingan lebih rapi.
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];
    
    // Membuat Query
    $query = "UPDATE tb_kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'";

    $result = mysqli_query($koneksi, $query);

    if($result){
      header("location:update.php");
    } else {
      echo "<script>alert('Data Gagal di update!')</script>";
    }

  }    
?>

</body>
</html>
