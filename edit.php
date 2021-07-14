<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Toko Buku</title>
  </head>
  
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom navbar-brand">
    <div class="container">
        <a class="navbar-brand" href="#">
        <img src="https://image.flaticon.com/icons/png/512/945/945170.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Toko Buku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link active navbar-brand" aria-current="page" href="#">
            <img src="https://image.flaticon.com/icons/png/512/553/553416.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Home</a>
            <a class="navbar-brand" href="index.php">
            <img src="https://image.flaticon.com/icons/png/512/1329/1329958.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Logout
            </a>
        </div>
        </div>
    </div>
    </nav>
    <!-- END NAVBAR -->
    <?php
    include 'config.php';

    $id = $_GET['id'];
    $tokobuku = mysqli_query($koneksi, "select * from tokobuku where id='$id'");

    while ($data = mysqli_fetch_array($tokobuku)) {
        ?>
        <div class="container mt-5">
            <p><a href="home.php">Home</a> / Edit Buku / <?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <p class="fw-bold">Buku</p>
                    </div>
                    <div class="card-body fw-bold">
                        <form method="post" action="update.php">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Buku</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Buku" name="nama" value="<?php echo $data['nama']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori Buku</label>
                                <input type="text" class="form-control" id="kategori" placeholder="Masukkan Kategori Buku" name="kategori" value="<?php echo $data['kategori']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" placeholder="Masukkan Penerbit" name="penerbit" value="<?php echo $data['penerbit']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga" value="<?php echo $data['harga']; ?>">
                            </div>
                            <button type="submit" class="btn btn-brand" value="SIMPAN">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>   
        </div>
        <footer>
        <div class="footer container-fluid">
           
    </footer>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>           
  </body>
</html>