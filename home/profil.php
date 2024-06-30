<?php
// Mulai sesi
session_start();

// Include file koneksi.php
include '../koneksi.php';

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['no_admin'])) {
    header("location: ../auth/index.php");
    exit();
}

// Ambil ID admin dari sesi
$no_admin = $_SESSION['no_admin'];

// Query untuk mengambil data admin berdasarkan ID admin
$query = "SELECT * FROM tb_admin WHERE no_admin = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "i", $no_admin);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Periksa apakah data admin ditemukan
if (mysqli_num_rows($result) > 0) {
    // Ambil data admin
    $admin_data = mysqli_fetch_assoc($result);
} else {
    // Jika data admin tidak ditemukan, tampilkan pesan error atau redirect ke halaman lain
    echo "Data admin tidak ditemukan.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Profil User</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Nama:</strong> <?php echo $admin_data['nama_admin']; ?></p>
                        <p><strong>Username:</strong> <?php echo $admin_data['username']; ?></p>
                        <p><strong>Domisili:</strong> <?php echo $admin_data['domisili']; ?></p>
                        <p><strong>Usia:</strong> <?php echo $admin_data['usia']; ?></p>
                        <p><strong>Jenis Kelamin:</strong> <?php echo $admin_data['jenis_kelamin']; ?></p>
                        <!-- Tambahkan informasi profil lainnya sesuai kebutuhan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
