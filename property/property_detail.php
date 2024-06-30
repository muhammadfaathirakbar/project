<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>Villa Agency - Property Detail Page</title>

  <!-- Bootstrap core CSS -->
  <link href="../assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../assets2/assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets2/assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="../assets2/assets/css/owl.css">
  <link rel="stylesheet" href="../assets2/assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>
<body>
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ** Header Area Start ** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="index.html" class="logo">
              <h1>Villa</h1>
            </a>
            <ul class="nav">
              <li><a href="../home/dashboard.php">Home</a></li>
              <li><a href="../home/propeties.php">Properties</a></li>
              <li><a href="../property/property_detail.php" class="active">Property Details</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li>
            </ul>   
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ** Header Area End ** -->

  <?php
    include "../koneksi.php";
    // Ambil nilai slug dari URL
    if(isset($_GET['slug'])) 
    $slug = $_GET['slug'];

    // Kueri SQL untuk mengambil data berdasarkan slug
    $kos = mysqli_query($koneksi, "SELECT * FROM tb_villa JOIN tb_kategori ON tb_villa.id_kategori = tb_kategori.id_kategori WHERE slug = '$slug'");

    // Tampilkan hasil kueri
    while ($data=mysqli_fetch_array($kos)) {
      $nama = $data['nama'];
      $deskripsi = $data['deskripsi'];
      $id_villa= $data['id_villa']; 
      $gambar= $data['gambar']; 

     
?>


  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a>  /  Single Property</span>
          <h3>Single Property</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="single-property section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="main-image">
            <img src="../assets1/images/<?= $data['gambar'] ?>" alt="">
          </div>
          <div class="main-content">
            <span class="category"><?= $data['nama_kategori'] ?></span>
            <h4><?= $data['nama']; ?></h4>
            <p><?= $data['deskripsi']; ?></p>
          </div> <?php } ?>
        
    </div>
        <div class="col-lg-4">
          <div class="info-table">
          <form method="POST" action="../menukontak/konfirmasipesan.php" class="user">
                  <div class="form-group">
                  <h4>Nama pemesan<br><span>    
                  <input type="text" class="form-control form-control-user" id="nama_pemesan"
                      placeholder="nama_pemesan" name="nama_pemesan" required>
                      <div class="invalid-feedback">
                        Harap isi nama pemesanan.
                      </div>
                    </div>
                    <img src="../assets2/assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                    <h4>Email<br><span>  
                    <input type="text" class="form-control form-control-user" id="email"
                        placeholder="email" name="email" required>
                      <div class="invalid-feedback">
                        Harap isi email.
                      </div>
                      <h4>Checkin<br><span>
                      <input type="date" class="form-control form-control-user" id="masuk"
                        placeholder="masuk" name="masuk" required>
                      <div class="invalid-feedback">
                        checkin.
                      </div>
                      <h4>Checkout<br><span>
                      <input type="date" class="form-control form-control-user" id="keluar"
                        placeholder="keluar" name="keluar" required>
                      <div class="invalid-feedback">
                        checkout.
                      </div>
                      <!-- Masukkan nilai slug dari tb_villa ke dalam input tersembunyi -->
                      <h4>Keterangan Villa<br><span>
    <input type="text"class="form-control form-control-user" id="detail" name="detail" value="<?php echo isset($slug) ? $slug : ''; ?>">
    <input type="text"class="form-control form-control-user" id="deskripsi" 
    name="deskripsi" value="<?php echo isset($deskripsi) ? $deskripsi : ''; ?>">
    <input type="hidden" class="form-control form-control-user" id="id_villa" name="id_villa" value="<?php echo isset($id_villa) ? $id_villa : ''; ?>">
    <input type="hidden" class="form-control form-control-user" id="nama" name="nama" value="<?php echo isset($nama) ? $nama : ''; ?>">
    <input type="hidden" class="form-control form-control-user" id="gambar" name="gambar" value="<?php echo isset($gambar) ? $gambar : ''; ?>">
    
    <!-- Isi formulir dengan data villa -->
    
                      
                      <button type="submit" name="submit_daftar" id="submit" class="btn btn-primary btn-user btn-block">masukkan pesanan</button>
                    <a href="../menukontak/prosespesan.php" class="btn btn-google btn-user btn-block">
                    <a href="../menukontak/pesanext.php" type="button" class="btn btn-info text-white">next</a>
                    
    <!-- Tombol untuk mengirimkan pesan -->
    

<!-- Tautan untuk menuju proses pesan -->


    </li>
    </div>       
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

        

  <!-- ** Footer Area Start ** -->
  <footer class="footer-no-gap">
    <div class="container">
      <div class="col-lg-12">
        <p>
          Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- ** Footer Area End ** -->

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../assets2/vendor/jquery/jquery.min.js"></script>
  <script src="../assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets2/assets/js/isotope.min.js"></script>
  <script src="../assets2/assets/js/owl-carousel.js"></script>
  <script src="../assets2/assets/js/counter.js"></script>
  <script src="../assets2/assets/js/custom.js"></script>
</body>
</html>


