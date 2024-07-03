<?php


  if (isset($_POST['submit_daftar'])) {
    include '../koneksi.php';

    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $nama_admin = mysqli_real_escape_string($koneksi, $_POST['nama_admin']);
    $domisili = mysqli_real_escape_string($koneksi, $_POST['domisili']);
    $usia = mysqli_real_escape_string($koneksi, $_POST['usia']);
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    
    $query = "INSERT INTO tb_admin (username, nama_admin, domisili,usia,jenis_kelamin,password) VALUES('$username','$nama_admin','$domisili','$usia','$jenis_kelamin','$password ')";

    mysqli_query($koneksi, $query);

    if(mysqli_affected_rows($koneksi) > 0){
      echo "
        <script>
          alert ('Berhasil membuat akun');
          document.location.href = '../index.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert ('Gagal membuat akun');
          document.location.href = '../auth/daftar.php';
        </script>
      ";
    }
  }  


?>
