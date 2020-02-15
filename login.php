<?php
session_start();
require 'functions.php';

//cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];


    //ambil username berdasrkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if($key === hash('sha256', $row['username']) ){
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION["login"]) ) { 
    header("Location: index.php");
    exit;
}



if(isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE 

    username = '$username'");
if(mysqli_num_rows($result) === 1) {
    //cek username


        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]) ) {
            //set session
            $_SESSION["login"] = true; 

            //cek remember me
            if(isset($_POST['remember']) ){
                //buat cookie

                setcookie('id', $row['id'], time()  + 60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web/fontawesome-free-5.10.2-web/css/all.min.css">
    <title>HALAMAN LOGIN</title>    
  </head>
  <body>
  


    <div class="container text-white bg-dark">
        <h4 class="text-center text-info">LOGIN</h4>
        
        <hr>
        <div class="form-group">
        <form action="" method="POST">
            <label for="username">Username</label>
            
            <div class="input-group">    
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" class="form-control" name="username" id="username"  placeholder="Username">
            </div>
        </div>

        <div class="form-group">
            <label for="password">Password</label>

            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-lock"></i></div>
                </div>            
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            
      
                </div>
        </div>
        <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">username/password salah</p>
<?php endif; ?>


        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary mb-3" id="login" name="login">LOGIN</button>
        <button type="reset" class="btn btn-danger mb-3" id="reset">RESET</button>
        <hr>
        <h4 class="text-center">Belum Punya Akun ?</h4>
        <center><a href="registrasi.php">DAFTAR</a></center>


</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>