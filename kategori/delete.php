<?php

include "../koneksi.php";

$id_kategori = $_GET['id_kategori'];
$query = "DELETE FROM tb_kategori WHERE id_kategori = $id_kategori";
$result = mysqli_query($koneksi, $query);
if($result){
  header("location: delete.php");
  exit(); 
} else {
  echo "<script>alert('Data Berhasil Dihapus!')</script>";
}

?>
