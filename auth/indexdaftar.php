
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets1/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../assets1/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets1/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../assets1/css/style.css">

    <title>Login #7</title>
  </head>
  <body>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="../assets1/images/logokost.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Halaman Daftar Kost.</p>
            </div>

                  <!-- <form action="proses_login.php" method="POST"> -->
                  <form method="POST" action="daftar.php" class="user">
                  <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username"
                        placeholder="username" name="username" required>
                      <div class="invalid-feedback">
                        Harap isi username.
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="password"
                        placeholder="password" name="password" required>
                      <div class="invalid-feedback">
                        Harap isi password.
                      </div>
                      <button type="submit" name="submit_daftar" id="submit" class="btn btn-primary btn-user btn-block">SIGN UP</button>
                    <a href="auth/daftar.php" class="btn btn-google btn-user btn-block">
                    <a class="font-weight-bold small" href="../index.php">Kembali Masuk</a>