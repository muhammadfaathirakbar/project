<?php
    include "../koneksi.php";


    include "../layouts/header.php";

 


?>



<!DOCTYPE html>

          <!-- Modal -->
          <div class="container-fluid" id="container-wrapper">
                <div class="card-body">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    id="#myBtn">
                    Launch demo modal
                  </button>
                </div>
          </div>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- You Content -->
  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center">
      <form method="POST">
        <div class="mb-3">
          <label for="inputNis" class="form-label">Nama Kategori</label>
          <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
        </div>
        <input name="tambah" type="submit" class="btn btn-primary" value="Tambah">
     
      </form>
    </div>
  </section>

  <?php
    if(isset($_POST['tambah'])){
      $nama_kategori = $_POST['nama_kategori'];
      $query = "INSERT INTO tb_kategori (nama_kategori) VALUES('".$nama_kategori."')";

      $result = mysqli_query($conn, $query);
    }    
  ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" value="Tambah">Save changes</button>
                </div>
              </div>
            </div>
          </div>

          <?php
        include "../layouts/footer.php";
       ?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">makanbang.com</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Kategori</a></li>
              <li class="breadcrumb-item"><a href="halaman2.php">berita</a></li>
            </ol>
          </div>
          
          
          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>ID Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                      <?php
                
                $no = 1;
                $kategori = mysqli_query($koneksi, "SELECT * FROM tb_kategori
                ORDER BY id_kategori DESC");
                
                // T  ambahkan penanganan error
                if (!$kategori) {
                    die("Query error: " . mysqli_error($koneksi));
                }

                while ($data = mysqli_fetch_array($kategori)) {

                ?>
        <tbody>
  <?php
    if ($kategori && mysqli_num_rows($kategori) > 0) {
      while ($data = mysqli_fetch_assoc($kategori)) {
        echo "
          <tr>
            
            <td>" . $data["id_kategori"] . "</td>
            <td>" . $data["nama_kategori"] . "</td>
           
            
            <td> 
              <a href='update.php?id_kategori=" . $data["id_kategori"] . "' class='btn btn-success'>Update</a>
              <a href='delete.php?id_kategori=" . $data["id_kategori"] . "' class='btn btn-danger' onclick='return confirm(\"Yakin ingin menghapus data?\")'>Delete</a>
			 
            </td>
			  </tr>";
      }
    } else {
      echo "<tr><td colspan='3'>No data found</td></tr>";
    }}
  ?>
</tbody>


        

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
     
        <!---Container Fluid-->