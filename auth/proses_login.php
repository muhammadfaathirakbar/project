<?php 
// Mulai sesi
session_start();

// Include file koneksi.php
include '../koneksi.php';

// Periksa apakah form login telah disubmit
if (isset($_POST['login'])) {
    // Ambil nilai username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa keberadaan pengguna dengan username dan password yang cocok menggunakan prepared statement
    $login_query = "SELECT * FROM tb_admin WHERE username=? AND password=?";
    $stmt = mysqli_prepare($koneksi, $login_query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $login_result = mysqli_stmt_get_result($stmt);

    // Periksa apakah hasil query menghasilkan setidaknya satu baris (artinya username dan password cocok)
    if (mysqli_num_rows($login_result) > 0) {
        // Jika cocok, ambil data pengguna dari hasil query
        $user_data = mysqli_fetch_array($login_result);

        // Simpan data pengguna ke dalam sesi
        $_SESSION['no_admin'] = $user_data['no_admin'];
        $_SESSION['username'] = $user_data['username'];
        $_SESSION['nama_admin'] = $user_data['nama_admin'];
        $_SESSION['domisili'] = $user_data['domisili'];
        $_SESSION['usia'] = $user_data['usia'];
        $_SESSION['jenis_kelamin'] = $user_data['jenis_kelamin'];

        // Redirect ke halaman dashboard atau halaman lain yang sesuai
        header("location:../home/dashboard.php");
        exit(); // Pastikan tidak ada kode berikutnya yang dieksekusi setelah redirect
    } else {
        // Jika tidak cocok, arahkan kembali ke halaman login dengan pesan kesalahan
        $_SESSION['login_error'] = "Username or password is incorrect";
        header("location:../auth/index.php");
        exit(); // Pastikan tidak ada kode berikutnya yang dieksekusi setelah redirect
    }
} else {
    // Jika form login tidak disubmit, arahkan kembali ke halaman login
    header("location: index.php");
    exit(); // Pastikan tidak ada kode berikutnya yang dieksekusi setelah redirect
}
?>
