<?php

    require 'functions.php';
    $kantinsehat = query("SELECT * FROM pembeli")

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Admin.css">
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web/fontawesome-free-5.10.2-web/css/all.min.css">

    <title>Halaman Admin</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>Kantin Sehat SMK JP1</b></a>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="icon ml-4">
        <h5>
            <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
            <a href=""><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign out"></i></a>
        </h5> 
    </div>
  </div>
</nav>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="pembeli.php"><i class="fas fa-users mr-2"></i>Daftar Pembeli</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="karyawan.php"><i class="fas fa-user-edit mr-2"></i>Daftar Karyawan</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="koordinator.php"><i class="fas fa-user-tie mr-2"></i>Koordinator</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="programming.php"><i class="fas fa-user mr-2"></i>Programming</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">BELOM TAU</a><hr class="bg-secondary">
                </li>
                
                
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-users mr-2"></i>DAFTAR PEMBELI</h3><hr>

        <a href="tambah.php" class="btn btn-primary"><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA PEMBELI</a>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pembeli</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Pesanan</th>
                    <th colspan="2" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

            <?php $i = 1; ?>
            <?php foreach($kantinsehat as $row) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["kelas"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                    <td><?= $row["pesanan"]; ?></td>
                    <td><a href="ubah.php?id=<?= $row["id"]; ?>"><i class="fas fa-edit bg-info p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></a></td>
                    <td><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></a></td>
                    
            
                    
                </tr>

<?php $i++; ?>
<?php endforeach; ?>

            </table>
      
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="admin.js"></script>

  </body>

</html>