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

    <title>STATION</title>
    <style>
        @font-face {
        font-family: Futura;
        src: url(futur.ttf);
        }
        body {
        font-family:futura;
         background-image: url(background.jpg);
         background-size:cover;
         background-repeat: no-repeat;
         background-position: center;
        }
        .row{
        transform: translateY(-50px);
        margin-left: auto;
        margin-right: auto;
        margin-top: 200px;
        padding-top: 30px;
        padding-left: 30px;
        padding-right: 30px;
        border-radius: 10px;
        
      }
      .col{
      margin-top:20px;
      }
  h1{
  text-align: center;
  color:yellow;
  }
  table{
    color:white;
    margin-left:80%;
  }
  a{
    color:BLACK;
  }

    </style>  
  </head>
  <body>
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
              <a class="nav-link text-white" href="adminindex.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="adminlibrary.php">Library</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="adminakun.php">Akun</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                lainnya
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="aksi_logout.php">Logout</a>
                <a class="dropdown-item" href="register.php">Register</a>
                <a class="dropdown-item" href="adminhalamankomentar.php">Lihat Komentar</a>
                
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
      <br>
      <br>

  <h1>KOMENTAR</h1>
  <table  class="CRUD">
  <tr>
     <td><a style="color: white" href="adminkomentar.php"><img src="plus.png" width="20px"> Tambah</a></td>
  </tr>
  </table>
  <div class="row row-cols-1 row-cols-md-4 g-31">
    <?php

        include_once 'koneksi.php';
        $data=mysqli_query($koneksi, "select * from niali2");
        while($d=mysqli_fetch_array($data)){
    ?>
        <div class="col">
        <div class="card h-100">
        <img  src ="<?php echo $d['foto'];?>" class="card-img-top" >
        <div class="card-body">
        <h5 class="card-title"><?php echo $d['nama']; ?></h5>
        <p class="card-text"><?php echo $d['komentar']; ?><p>
        </div> 
        <div class="card-footer">
        <small class="text-muted">
        <a  href="hapus.php ?nama=<?php echo $d['nama'];?>">HAPUS</a>
        <a>OR</a>
        <a  href="edit.php ?nama=<?php echo $d['nama'];?>">EDIT</a>
        </small>
        </div>
    </div>
    </div>
    <?php
    }

    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>