

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
            <h3><i class="fas fa-user-edit mr-2"></i>DAFTAR KARYAWAN</h3><hr>

        <a href="" class="btn btn-primary"><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA KARYAWAN</a>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tempat Tanggal Lahir</th>
                    <th scope="col">No Handphone</th>
                    <th colspan="3" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Rendi Fadilah</td>
                    <td>JL Abdul Muis No 44</td>
                    <td>Jakarta , 05 Mei 2003</td>
                    <td>088121231213</td>
                    <td><a href="" class="btn btn-primary">DETAIL</a></td>
                    <td><i class="fas fa-edit bg-info p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
                    <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                    <td>Arriq Zaki Rasli</td>
                    <td>JL Abdul Muis No 44</td>
                    <td>Jakarta , 05 Juni 2003</td>
                    <td>081234567890</td>
                    <td><a href="" class="btn btn-primary">DETAIL</a></td>
                    <td><i class="fas fa-edit bg-info p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
                    <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded"  data-toggle="tooltip" title="Delete"></i></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                    <td>Wisman</td>
                    <td>JL Abdul Muis No 44</td>
                    <td>Jakarta , 05 July 2003</td>
                    <td>083242342553</td>
                    <td><a href="" class="btn btn-primary">DETAIL</a></td>
                    <td><i class="fas fa-edit bg-info p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
                    <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded"  data-toggle="tooltip" title="Delete"></i></td>
                </tr>
                <tr>
                <th scope="row">4</th>
                    <td>Rizal Nurul Huda</td>
                    <td>JL Abdul Muis No 44</td>
                    <td>Jakarta , 05 Agustus 2003</td>
                    <td>088121231253</td>
                    <td><a href="" class="btn btn-primary">DETAIL</a></td>
                    <td><i class="fas fa-edit bg-info p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
                    <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" ata-toggle="tooltip" title="Delete"></i></td>
                </tr>
                <tr>
                <th scope="row">5</th>
                    <td>Rino Satya Putra</td>
                    <td>JL Abdul Muis No 44</td>
                    <td>Jakarta , 05 September 2003</td>
                    <td>088121231222</td>
                    <td><a href="" class="btn btn-primary">DETAIL</a></td>
                    <td><i class="fas fa-edit bg-info p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
                    <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" ata-toggle="tooltip" title="Delete"></i></td>
                </tr>
            </tbody>
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