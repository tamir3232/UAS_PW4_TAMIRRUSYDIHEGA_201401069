<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
 header("location:login.php");
}

if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="home2.css">
    <link rel="icon" href="CAMERA.png">
    <title>STATION</title>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg  ">
        <a class="navbar-brand text-white" href="HOME2.HTML">
            <img src="CAMERA.png" width="50" height="60" alt="">
            PHOTOGRAPHY STATION
          </a>
        <div class="container text-white ">
        <a class="navbar-brand text-white"  >Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="library.php">Library</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                lainnya
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="aksi_logout.php">Logout</a>
                <a class="dropdown-item" href="register.php">Register</a>
                <a class="dropdown-item" href="halamankomentar.php">Lihat Komentar</a>
                
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="tamir.php" tabindex="-1" aria-disabled="true">TAMIR RUSYDI HEGA</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" .bg-warning>
            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0  bg-warning text-white" type="submit ">Search</button>
          </form>
        </div>
        </div>
      </nav>
        <img src="Layer 3.jpg" class="langit translate" data-speed="-0.3" alt="">
        <img src="Layer2.png" class="halaman translate" alt="">
        
        <img src="Layer 1.png" class="orang translate"data-speed="-0.1" alt="">
        <h1 class="big-title translate" data-speed="0.3">PHOTOGRAPHY STATION</h1>
    </header>
    <section>
        <div class="shadow"></div>
        <div class="container">
            <div class="content">
            <h3 class="title">
                ABOUT
                <div class="border"></div>
            </h3>
            <p class="text" data-speed="4.0">PHOTOGRAPHY STATION adalah web yang dimana menjadi tempat wadah saya disaat saya suatu hari nanti traveling, 
                Yang mana akan menjadi sebuah wadah saya menaruh hasil foto atau kenagan di setiap perjalanan saya, dan agar bisa di gunakan atau di 
                nikmati oleh orang lain</p>
            </div>
            <div class="imgcontainer" data-speed="4.0">
                <img src="background.jpg" alt="">
            </div>
        </div>
        
    </section>


    
    <footer>
      <br>
      <br><br>
      
      <div class="card-deck translate">

        <div class="card" data-speed="-0.1">
          <img src="CAMERA.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">CAMERA</h5>
            <p class="card-text">Canon EOS seri 1D menciptakan maha karya terbaru dalam jajaran kamera terdepan saat ini. Canon EOS-1D X Mark III diciptakan kokoh dan tahan banting yang secara sempurna cepat tanggap dan melakukan pemfokusan intuitif, selain itu juga menawarkan kualitas gambar superior serta perekaman video 4K mencengangkan, untuk berbagai subjek foto yang menantang.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="LENSA.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">LENSA</h5>
            <p class="card-text">Canon EF-S 10-18mm f/4.5-5.6 IS STM adalah lensa wide-angle zoom yang di desain untuk DSLR EOS bersensor APS-C yang bisa dipasang focal length antara 16-28.8mm sampai dengan 35mm. Desain optik Canon EF-S 10-18mm f/4.5-5.6 IS STM menggabungkan satu elemen aspherical, satu elemen UD (Ultra-low dispresion), dan satu elemen diameter besar untuk meminimalisir penyimpangan berwarna sepanjang  zoom range dan berkontribusi untuk ketajaman dan kejelasan gambar.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="TRIPOD.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">TRIPOD</h5>
            <p class="card-text">Ya ini tripod untuk nahan kamera. udah gitu aja.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="home2.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>