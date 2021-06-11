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
    <link rel="stylesheet" href="">
    <link rel="icon" href="CAMERA.png">
    
    <title>STATION</title>
    <style>
        body{
    background-image: url(background.jpg);
    background-size: cover;
    background-position-y: center;
    font-family: futura;
    color:black;
}
    h2{
        text-align:center;
        color:yellow;
    }

    </style>
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

      <!--awalan tabel-->
      <br>
      <br>
      <h2>DAFTAR AKUN</h2>
      <div class="container-fluid">
      <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nama Awal</th>
      <th scope="col">Nama Akhir</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <?php

        include_once 'koneksi.php';
        $data=mysqli_query($koneksi, "select * from register");
        while($d=mysqli_fetch_array($data)){
    ?>

  <tbody>
    <tr>
      <td><?php echo $d['namaawal']; ?></td>
      <td><?php echo $d['namaakhir']; ?></td>
      <td><?php echo $d['email']; ?></td>
      <td><?php echo $d['username']; ?></td>
      <td><?php echo $d['password']; ?></td>
      <td><?php echo $d['tanggallahir']; ?></td>
      <td><?php echo $d['jeniskelamin']; ?></td>
      <td>
        <a  href="hapusakun.php ?username=<?php echo $d['username'];?>">HAPUS</a>
        /
        <a  href="editakun.php ?username=<?php echo $d['username'];?>">EDIT</a>
        
    </td>
    </tr>
    <?php
        }
    ?>
    </tbody>
    </table>
    
    </div>


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