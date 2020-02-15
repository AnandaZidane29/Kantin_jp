<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
  require 'functions.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web/fontawesome-free-5.10.2-web/css/all.min.css">
    

    <title>Kantin Sehat</title>
  
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg bg-info navbar-dark fixed-top" id="navbar">
      <div class="container">
        <a href="#" class="navbar-brand"><img src="img/jp1.png" alt="SMK JAKARTA PUSAT 1" width="50px;"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  justify-content-end mr-5" id="menu">
          <ul class="navbar-nav">
            <li class="nav-item mr-3"><a href="#home" class="nav-link">Home</a></li>
            <li class="nav-item mr-3"><a href="#about" class="nav-link">About Us</a></li>
            <li class="nav-item mr-3"><a href="#service" class="nav-link">Our Info</a></li>
            <li class="nav-item mr-3"><a href="#testimoni" class="nav-link">Our Program</a></li>
            <li class="nav-item mr-3"><a href="#paket" class="nav-link">Food Package</a></li> 
            <li class="nav-item mr-3"><a href="logout.php" class="nav-link ml-5">Logout <i class="fas fa-sign-out-alt"></i></a></li>
          </ul>
        </div> 
      </div>
    </nav>

    <header>
      <div class="jumbotron jumbotron-fluid">
        <div class="container text-center mt-5">
        
          <h1 class="display-4 text-white mt-5 pt-5 pb-5">Kantin Sehat, Siswa Hebat</h1>
          <button class="btn btn-info btn-lg mt-5">More Info Kantin SMK Jakarta Pusat 1</button>
        </div>
      </div>
    </header>

    <section id="about" class="bg-white">
        <div class="container">
          <h2 class="text-info text-center display-4">About US</h2>
            <div class="row">
              <div class="col-md-6 text-center">
                <img src="img/coding.png" alt="CODING" class="img-fluid" style="max-height:200px">
              </div>
              <div class="col-md-6 pt-3">
                <p class="lead text-justify">
                  Sekolah SMK Jakarta Pusat 1 
                </p>
              </div>
            </div>
        </div>
    </section>

    <section id="service" class="bg-light py-5">
        <div class="container">
            <h2 class="display-4 text-info text-center">Tentang Kami</h2>
            <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 text-center mb-3">
                    <div class="card border-info col-service">
                        <div class="card-header bg-primary border-primary">
                            <h5 class="card-title text-dark">Makanan</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text lead">Klik untuk cari menu makanan yang kamu suka!</p>
                        </div>
                        <button class="btn btn-primary btn-md text-white">
                          Read More
                        </button>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 text-center mb-3">
                      <div class="card border-info col-service">
                          <div class="card-header bg-primary border-primary">
                              <h5 class="card-title text-dark">Karyawan</h5>
                          </div>
                          <div class="card-body">
                              <p class="card-text lead">Daftar Karyawan Kantin Sehat SMK Jakarta Pusat 1</p>
                          </div>
                          <button class="btn btn-primary btn-md text-white">
                            Read More
                          </button>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 text-center mb-3">
                        <div class="card border-info col-service">
                            <div class="card-header bg-primary border-primary">
                                <h5 class="card-title text-dark">Kata Orang</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text lead">Pendapat tentang Kantin Sehat SMK Jakarta Pusat 1</p>
                            </div>
                            <button class="btn btn-primary btn-md text-white">
                              Read More
                            </button>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-12 text-center mb-3">
                          <div class="card border-info col-service">
                              <div class="card-header bg-primary border-primary">
                                  <h5 class="card-title text-dark">Makanan</h5>
                              </div>
                              <div class="card-body">
                                  <p class="card-text lead">Klik untuk cari menu makanan yang kamu suka!</p>
                              </div>
                              <button class="btn btn-primary btn-md text-white">
                                Read More
                              </button>
                          </div>
                        </div>
                 </div>
            </div>
    </section>
    
    <section id="testimoni" class="bg-info py-">
            <div class="container">
              <h2 class="display-4 text-white text-center">Program Kantin Sehat</h2>

              <div id="review-slide" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <blockquote class="blockquote text-center">
                      <p class="lead text-white">
                        Salah satu Program kantin sehat dengan harga yang bisa dibilang cukup hemat dan rasa makanan nya enak, lezat, dan sehat itu merupakan program kami untuk masyarakat dan siswa siswi disekolaah agar bisa hidup sehat dengan harga makanan yang hemat ! 
                      </p>
                      <footer class="blockquote-footer text-dark">
                        Bu HJ. Sari Marwati - Wakil Kepala Sekolah SMK Jakarta Pusat , Koordinator Kantin Sehat
                      </footer>
                    </blockquote>
                  </div>
                   
                  <div class="carousel-item">
                      <blockquote class="blockquote text-center px-5 mx-5">
                        <p class="lead text-white">
                          Dengan adanya Website Kantin Sehat ini , kami berharap agar bisa mempermudah pelanggan untuk membeli makanan secara online ~ SELAMAT MENIKMATI !
                        </p>
                        <footer class="blockquote-footer text-dark px-5 mx-5">
                          RAW - Programmer Kantin Sehat
                        </footer>
                      </blockquote>
                    </div>           
                </div>
                <a class="carousel-control-prev" href="#review-slide" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#review-slide" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
            </div>
    </section>
        


    <section id="paket" class="bg-white py-5" >
        <div class="container">
          <h2 class="display-4 text-info text-center">Paket Makanan</h2>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 py-2">
              <div class="card border-success">
                <div class="card-header bg-success">
                    <h5 class="text-white text-center">Paket Mantap</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush text-center">
                      <li class="list-group-item"><img src="img/ayam-geprek.jpg" alt="" width="200px;" height="205px;"></li>
                      <li class="list-group-item">Nasi + Ayam Geprek + Es Teh Manis</li>
                      <li class="list-group-item">Rp 20.000</li>
                  </ul>
                </div>

                <div class="card-footer text-center bg-transparent">
                    <button class="btn btn-md btn-success" data-toggle="modal" data-target="#daftar" data-paket="Paket Mantap">Beli Paket</button>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                <div class="card border-warning">
                  <div class="card-header bg-warning">
                      <h5 class="text-white text-center">Paket Hemat</h5>
                  </div>
                  <div class="card-body">
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><img src="img/nasi goreng.jpg" alt="Nasi Goreng" width="200px"></li>
                        <li class="list-group-item">Nasi Goreng + Telor Ceplok + Sosis</li>
                        <li class="list-group-item">Rp 15.000</li>
                    </ul>
                  </div>
  
                  <div class="card-footer text-center bg-transparent">
                      <button class="btn btn-md btn-warning" data-toggle="modal" data-target="#daftar" data-paket="Paket Hemat">Beli Paket</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 py-2">
                  <div class="card border-danger">
                    <div class="card-header bg-danger">
                        <h5 class="text-white text-center">Paket Anak Sekolah</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush text-center">
                          <li class="list-group-item"><img src="img/sotoayam.jpg" alt="" width="200px;" height="205px;"></li>
                          <li class="list-group-item">Nasi + Soto Ayam</li>
                          <li class="list-group-item">Rp 10.000</li>
                      </ul>
                    </div>
    
                    <div class="card-footer text-center bg-transparent">
                        <button class="btn btn-md btn-danger" data-toggle="modal" data-target="#daftar" data-paket="Paket Anak Sekolah">Beli Paket</button>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="daftar" tab-index="-1" aria-labelledby="daftarLabel" aria-hidden="true"> 
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title"></h5>
                          <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                            <span aria-hidden="true"> &times; </span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="#">
                              <div class="form-group">
                                  <label for="paket" class="col-form-label">Nama Paket</label>
                                  <input type="text" class="form-control" id="nama-paket" disabled>
                              </div>
                              <div class="form-group">
                                  <label for="nama" class="col-form-label">Nama Lengkap</label>
                                  <input type="text" class="form-control" id="nama">
                              </div>
                              <div class="form-group">
                                  <label for="kelas" class="col-form-label">Kelas</label>
                                  <input type="text" class="form-control" id="kelas">
                              </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-info">Beli Paket </button>
                        </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
    </section>


    

    
    <footer class="bg-info py-5" id="footer">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <ul class="list-inline">
                <h4 class="display-4 text-white text-center">Follow Us On</h4>
                <li class="list-inline-item">
                  <a href="https://instagram.com" target="_blank">
                    <div class="social-rounded">
                      <i class="fab fa-instagram"></i>
                    </div>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://facebook.com" target="_blank">
                    <div class="social-rounded">
                      <i class="fab fa-facebook"></i>
                    </div>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://twitter.com" target="_blank">
                    <div class="social-rounded">
                      <i class="fab fa-twitter"></i>
                    </div>
                  </a>
                </li>
              </ul>
              <h5 class="lead text-white">RPL SMK Jakarta Pusat 1</h5>
            </div>
          </div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/style.js"></script>
  </body>
</html>