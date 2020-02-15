<?php
require 'functions.php';

    if(isset($_POST["register"]) ){
        
        if(registrasi($_POST) > 0 ){
            echo "<script>
            alert('user baru berhasil ditambahkan!');
        </script>";
    } else {
        echo mysqli_error($conn);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Register.css">
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web/fontawesome-free-5.10.2-web/css/all.min.css">
    <title>HALAMAN REGSITER</title>    
  </head>
  <body>
    <div class="container text-white bg-secondary">
        <h4 class="text-center text-info">REGISTER</h4>
        <hr>
        <form action="" method="post">
        <div class="form-group">
            

        <div class="input-group">    
        <label for="username"></label>
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
         </div>

        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">    
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                </div>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        </div>

        <div class="form-group">
            <label for="password2"> Konfirmasi Password</label>
            <div class="input-group">    
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-lock"></i></div>
                </div>
            <input type="password" name="password2" class="form-control" id="password2" placeholder="Password">
        </div>
        </div>
    
        <button type="submit" class="btn btn-info" id="Register" name="register">REGISTER</button>
        <button type="submit" class="btn btn-danger" id="reset">RESET</button>
        <div>
        <h4 class="text-center m-4">SUDAH PUNYA AKUN ?</h4>
        <center><a href="login.php">LOGIN</center></a>
    </div>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>