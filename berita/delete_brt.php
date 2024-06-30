<?php

include "../koneksi.php";

$id_villa = $_GET['id_villa'];
$result = mysqli_query($koneksi, "DELETE FROM tb_villa WHERE id_villa = $id_villa");

if ($result) {
    header("location:next.php");
    exit(); 
} else {
    echo "<script>alert('Data Gagal Dihapus!')</script>";
}

?>