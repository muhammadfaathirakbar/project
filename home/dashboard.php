<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa Agency - Real Estate HTML5 Template</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets2/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets2/assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="../assets2/assets/css/owl.css">
    <link rel="stylesheet" href="../assets2/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets2/assets/css/style.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

</head>
<body>

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
    <?php
session_start();

// Periksa apakah ada session nama_admin
if(isset($_SESSION['nama_admin'])) {
    $nama_admin = $_SESSION['nama_admin'];
} else {
    $nama_admin = "Guest";
}
?>
    <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1><a>Kost Padang<a></h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="../home/dashboard.php" class="active">Home</a></li>
                        <li><a href="../home/propeties.php">Properties</a></li>
                        <li><a href="../berita/tambah_brt.php">Tambah Data</a></li>
                        <li><a href="../property/property_detail.php">Property Details</a></li>
                        <li><a href="../home/profil.php">Profil</a></li>
                        <li>
                          
                                Welcome, <?php echo $nama_admin; ?>!
                                <p><a href="../auth/logout.php">Logout</a></p>
                            </div>
                        </li>
                        </ul>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
                     
   
  <div class="main-banner">
    <div class="owl-carousel owl-banner">
        <div class="item item-1">
            <div class="header-text">
                <span class="category">Padang, <em>Padang Timur</em></span>
                <h2>Ayo!<br>Dapatkan Penawaran Kost Terbaik !</h2>
            </div>
        </div>
        <div class="item item-2">
            <div class="header-text">
                <span class="category">Pauh, <em>Padang</em></span>
                <h2>Cepat!<br>Dapatkan Kost yang Terbaik di Kota</h2>
            </div>
        </div>
        <div class="item item-3">
            <div class="header-text">
                <span class="category">Miami, <em>South Florida</em></span>
                <h2>Banyak Pilihan Kost!<br>Ayo Segera Dapatkan</h2>
            </div>
        </div>
    </div>
</div>



  <div class="contact section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Contact Us</h6>
            <h2>Hubungi Agen Kos Kami</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="../assets2/assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>081278867654<br><span>Nomor Telfon</span></h6>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item email">
                <img src="../assets2/assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>mfaathir123@gmail.com<br><span>Email Bisnis</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <form id="contact-form" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Nama Lengkap</label>
                  <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Alamat Email</label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Judul</label>
                  <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">Pesan</label>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-8">
    
        
      
      </div>
    </div>
  </footer>


  <script src="../assets2/vendor/jquery/jquery.min.js"></script>
  <script src="../assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets2/assets/js/isotope.min.js"></script>
  <script src="../assets2/assets/js/owl-carousel.js"></script>
  <script src="../assets2/assets/js/counter.js"></script>
  <script src="../assets2/assets/js/custom.js"></script>

  </body>
</html>