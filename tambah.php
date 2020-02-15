<?php
require 'functions.php';
    //cek apakah tombol submit udah ditekan atau belum?
if( isset($_POST["submit"]) ){
       
    //cek apakah data berhasil ditambahkan atau tidak
       if( tambah($_POST) > 0){
           //pakai alert javascript
           echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'pembeli.php';
                </script>
           ";
       } else{
           echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'pembeli.php';
                </script>
           ";
       }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tambah.css">

    <title>TAMBAH DATA PEMBELI</title>
  </head>
  <body>
    <center><h1>TAMBAH DATA PEMBELI</h1></center>

    <div class="container bg-primary">
    <form action="" method="POST">
     <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" autocomplete>
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan Kelas">
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan">
    </div>
    <div class="form-group">
        <label for="pesanan">Pesanan</label>
        <input type="text" class="form-control" id="pesanan" name="pesanan" placeholder="Masukkan nama pesanan makanan">
    </div>
    
    <button type="submit" class="btn btn-success" name="submit" id="submit">Submit</button>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>