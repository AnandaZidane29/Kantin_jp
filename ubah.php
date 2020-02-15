<?php

require 'functions.php';

//ambil data

$id = $_GET["id"];

$beli =  query("SELECT * FROM pembeli WHERE id = $id")[0];

    //cek apakah tombol udah ditekan atau belum ?

    if(isset($_POST["submit"])) {
        
        //cek data berhasil diubah atau tdk ?
        if( ubah($_POST) > 0) {
            echo "
                <script>
                alert('DATA BERHASIL DIUBAH!');
                document.location.href = 'pembeli.php';
                </script>

            ";
        } else{
            echo "
                <script>
                alert('DATA GAGAL DIUBAH!');
                document.location.href = 'pembeli.php';
                </script>

            ";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ubah Data Pembeli</h1>
<form action="" method="post">
        <input type="hidden" name="id" value="<?= $beli["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required value="<?= $beli["nama"]; ?>">
            </li>
            <li>
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" value="<?= $beli["kelas"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $beli["jurusan"]; ?>">
            </li>
            <li>
                <label for="pesanan">Pesanan</label>
                <input type="text" name="pesanan" id="pesanan" value="<?= $beli["pesanan"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>