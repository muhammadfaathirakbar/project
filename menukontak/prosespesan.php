<?php

if (isset($_POST['submit_daftar'])) {
    include '../koneksi.php';

    // Ambil nilai dari formulir dan bersihkan
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $nama_pemesan = mysqli_real_escape_string($koneksi, $_POST['nama_pemesan']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $masuk = mysqli_real_escape_string($koneksi, $_POST['masuk']);
    $keluar = mysqli_real_escape_string($koneksi, $_POST['keluar']);
    $detail = mysqli_real_escape_string($koneksi, $_POST['detail']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $id_villa = mysqli_real_escape_string($koneksi, $_POST['id_villa']);
    $gambar = mysqli_real_escape_string($koneksi, $_POST['gambar']);
    
    // Perhatikan penambahan tanda kutip pada variabel dalam query
    $query = "INSERT INTO tb_pesan (nama_pemesan, email, masuk, keluar, detail, deskripsi, id_villa, gambar) VALUES ('$nama_pemesan', '$email', '$masuk', '$keluar', '$detail', '$deskripsi', '$id_villa', '$gambar')";
    
    // Simpan data pemesanan ke dalam tabel tb_pesan
    mysqli_query($koneksi, $query);

    if(mysqli_affected_rows($koneksi) > 0){
        // Tampilkan pesan berhasil dengan JavaScript
        echo "
            <script>
                alert('Berhasil memasukkan');
                window.location.href = '../property/property_detail.php';
            </script>
        ";
    } else {
        // Tampilkan pesan gagal dengan JavaScript
        echo "
            <script>
                alert('Gagal membuat akun');
                window.location.href = '../auth/daftar.php';
            </script>
        ";
    }
}
?>
