<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konfirmasi Pesanan</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      padding-top: 50px;
    }
    .container {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    .btn {
      width: 150px;
      margin-right: 10px;
    }
  </style>
  </head>
<?php
session_start();

// Ambil data dari session atau form sebelumnya
$nama_pemesan = isset($_POST['nama_pemesan']) ? $_POST['nama_pemesan'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$masuk = isset($_POST['masuk']) ? $_POST['masuk'] : '';
$keluar = isset($_POST['keluar']) ? $_POST['keluar'] : '';
$detail = isset($_POST['detail']) ? $_POST['detail'] : '';
$deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';
$id_villa = isset($_POST['id_villa']) ? $_POST['id_villa'] : '';
$nama_villa = isset($_POST['nama']) ? $_POST['nama'] : '';
$gambar = isset($_POST['gambar']) ? $_POST['gambar'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Semua tag head -->
</head>
<body>
  <div class="container">
    <h2>Konfirmasi Pesanan</h2>
    <p>Silakan periksa kembali detail pesanan Anda sebelum mengirimkan:</p>
    <ul>
      <li>Nama Pemesan: <?= $nama_pemesan ?></li>
      <li>Email: <?= $email ?></li>
      <li>Checkin: <?= $masuk ?></li>
      <li>Checkout: <?= $keluar ?></li>
      <li>Detail Villa: <?= $detail ?></li>
      <li>Deskripsi Villa: <?= $deskripsi ?></li>
      <li>ID Villa: <?= $id_villa ?></li>
      <li>Nama Villa: <?= $nama_villa ?></li>
      <li>Gambar Villa: <?= $gambar ?></li>
    </ul>
    <form action="../menukontak/prosespesan.php" method="post">
      <!-- Input tersembunyi untuk mengirimkan data -->
      <input type="hidden" name="nama_pemesan" value="<?= $nama_pemesan ?>">
      <input type="hidden" name="email" value="<?= $email ?>">
      <input type="hidden" name="masuk" value="<?= $masuk ?>">
      <input type="hidden" name="keluar" value="<?= $keluar ?>">
      <input type="hidden" name="detail" value="<?= $detail ?>">
      <input type="hidden" name="deskripsi" value="<?= $deskripsi ?>">
      <input type="hidden" name="id_villa" value="<?= $id_villa ?>">
      <input type="hidden" name="nama" value="<?= $nama_villa ?>">
      <input type="hidden" name="gambar" value="<?= $gambar ?>">
      <button type="submit" name="submit_daftar" id="submit" class="btn btn-primary">Kirim Pesanan</button>
      <a href="property_detail.php" class="btn btn-danger">Kembali ke Halaman Sebelumnya</a>
    </form>
  </div>
</body>
</html>
