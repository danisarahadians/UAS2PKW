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
    <section>
        <div class="hero-banner container-fluid p-5 text-white">
            <div class="row mt-5">
                <div class="col-md-12" style="text-align: center;">
                    <h1 style="color: #E8F0F2; text-shadow: 2px 2px #053742;">Toko Buku</h1>
                    <h5 style="color: #39A2DB; text-shadow: 2px 2px #053742;">
                    We sell what you searching for</h5>
                
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </section>
    <div class="container data-mahasiswa mt-5">
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Membuat form dengan method post untuk memanggil file store.php -->
                    <form method="POST" action="store.php" name="form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahDataLabel">Tambah Buku</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Input Nama -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Buku</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Buku" name="nama" required>
                            </div>
                            <!-- Input Kategori -->
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori Buku</label>
                                <input type="text" class="form-control" id="kategori" placeholder="Masukkan Kategori Buku" name="kategori" required>
                            </div>
                            <!-- Input Penerbit -->
                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" placeholder="Masukkan Penerbit" name="penerbit" required>
                            </div>
                            <!-- Input Harga -->
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!--Button Close Modal-->
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!--Button Tambah Data-->
                            <button type="submit" class="btn btn-brand" value="SIMPAN">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- DATA -->
    <div class="container data-mahasiswa mt-5">
    <button type="button" class="btn btn-brand" data-bs-toggle="modal" data-bs-target="#tambahData">
                    Tambah Buku</button>
        <table class="table table-striped" id="tabelTokobuku">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Kategori Buku</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Diskon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'config.php';
                $no = 1;
                $tokobuku = mysqli_query($koneksi,"select * from tokobuku");
                while ($data = mysqli_fetch_array($tokobuku)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td><?php echo $data['penerbit']; ?></td>
                        <td><?php echo $data['harga']; ?></td>
                        <td><?php echo $data['diskon']; ?></td>
                        <td>
                            <a href="detail.php?id=<?php echo $data['id'];?>" class="btn btn-brand btn-sm text-green">Detail</a>
                            <a href="edit.php?id=<?php echo $data['id'];?>" class="btn btn-brand btn-sm text-green">Edit</a>
                            <a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus data?')">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <footer>
        <div class="footer container-fluid">
        
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $('#tabelTokobuku').DataTable();
        } );
    </script>
</body>
</html> 