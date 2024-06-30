<?php
  include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Tambah Berita</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<a href="../berita/next.php" type="button" class="btn btn-info text-white">next</a>
<a href="../kategori/tambah.php" type="button" class="btn btn-info text-white">kategori</a>
  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">Form Tambah Berita</h1>
      <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="" class="form-label">Kategori</label>
          <select name="id_kategori" id="" class="form-control" required>
            <option value="">Pilih Kategori</option>
            <?php 
            $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
            while ($kategori = mysqli_fetch_array($query)) {
            ?>
              <option value="<?= $kategori['id_kategori'] ?>">
                <?= $kategori['nama_kategori'] ?>
              </option>
            <?php } ?>
          </select>
        </div>
                <div class="mb-3">
          <label for="harga" class="form-label">Harga</label>
          <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan harga">
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Villa</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama villa">
        </div>

        <div class="mb-3">
          <label for="kamar" class="form-label">Kamar</label>
          <input type="text" class="form-control" id="kamar" name="kamar" placeholder="Masukan kamar">
        </div>
        <div class="mb-3">
          <label for="kamarmandi" class="form-label">Kamar Mandi</label>
          <input type="text" class="form-control" id="kamarmandi" name="kamarmandi" placeholder="Masukan kamar mandi">
        </div>
        <div class="mb-3">
          <label for="luas" class="form-label">Luas</label>
          <input type="text" class="form-control" id="luas" name="luas" placeholder="Masukan luas">
        </div>
        <div class="mb-3">
          <label for="lantai" class="form-label">Lantai</label>
          <input type="text" class="form-control" id="lantai" name="lantai" placeholder="Masukan lantai">
        </div>
       
        <div class="mb-3">
          <label for="parkir" class="form-label">Harga</label>
          <input type="text" class="form-control" id="parkir" name="parkir" placeholder="Masukan parkir">
        </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label">deskripsi</label>
          <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi Villa">
        </div>
        <!-- Masukkan inputan yang lain -->
        <input type="file" id="gambar" name="gambar" class="form-control" aria-describedby="default input example">
        <input type="file" id="file_video" name="file_video" class="form-control" aria-describedby="default input example">
        <input name="simpan" type="submit" class="btn btn-primary" value="Tambah Villa">
        <a href="next.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['simpan'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $id_kategori = $_POST['id_kategori'];
      $harga = $_POST['harga'];
      $nama = $_POST['nama'];

      $kamar = $_POST['kamar'];
        $kamarmandi = $_POST['kamarmandi'];
        $luas = $_POST['luas'];
        $lantai = $_POST['lantai'];
        $parkir = $_POST['parkir'];
        $deskripsi = $_POST['deskripsi'];
        
     $slug= str_replace('+','-',urlencode($nama));
      $namafile = $_FILES['gambar']['name'];
      $namasementara = $_FILES['gambar']['tmp_name'];
      $terupload = move_uploaded_file($namasementara, '../assets1/images/' . $namafile);
      
      $namavideo = $_FILES['file_video']['name'];
      $namasementaravideo = $_FILES['file_video']['tmp_name'];

      $terupload_video = move_uploaded_file($namasementaravideo, '../assets/video' . $namavideo);


     
      $result = mysqli_query($koneksi,"INSERT INTO tb_villa (id_kategori, harga, nama, kamar, kamarmandi, luas, lantai, parkir,deskripsi, gambar, file_video, slug) VALUES ('$id_kategori', '$harga', '$nama', '$kamar', '$kamarmandi', '$luas', '$lantai', '$parkir','$deskripsi', '$namafile', '$namavideo', '$slug')");



      if($result){
        header("location:../berita/next.php");
        exit(); // Add exit() to stop further execution
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

</body>
</html>
