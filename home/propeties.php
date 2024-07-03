<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Villa Agency - Property Listing by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets2/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets2/assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="../assets2/assets/css/owl.css">
    <link rel="stylesheet" href="../assets2/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

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

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>Villa</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="../home/dashboard.php">Home</a></li>
                      <li><a href="../home/propeties.php" class="active">Properties</a></li>
                      <li><a href="../property/property_detail.php">Property Details</a></li>
                      <li><a href="contact.html">Contact Us</a></li>
                      <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
          <h3>Properties</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Kost Putra</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Kost Putri</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Kost Campur</a>
        </li>
      </ul>
      <div class="row properties-box">
      <?php
                include "../koneksi.php";
                $kos = mysqli_query($koneksi, "SELECT * FROM tb_villa join tb_kategori on tb_villa.
                id_kategori = tb_kategori.id_kategori ORDER BY id_villa DESC LIMIT 5");
                while ($data=mysqli_fetch_array($kos)) {
                ?> 
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href="property-details.html"><img src="../assets1/images/<?=$data['gambar']?>"  alt=""></a>
           
            <span class="category"><?=$data['nama_kategori']?></span>
            <h6><?=$data['harga']?></h6>
            <h4> <a href="../property/property_detail.php?slug=<?= $data['slug']; ?>" ><?= $data['nama']; ?></a></h4>
            <ul>
              <li>Kamar Tidur:<span><?=$data['kamar']?></span></li>
              <li>Kamar Mandi:<span><?=$data['kamarmandi']?></span></li>
              <li>Luas:<span><?=$data['luas']?></span></li>
              <li>Lantai:<span><?=$data['lantai']?></span></li>
              <li>Parkir:<span><?=$data['parkir']?></span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div> 
          </div> 
        </div><?php } ?>
                </div>
                </div>
  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        
        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com">ThemeWagon</a></p>
      </div>
    </div>
  </footer>

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
