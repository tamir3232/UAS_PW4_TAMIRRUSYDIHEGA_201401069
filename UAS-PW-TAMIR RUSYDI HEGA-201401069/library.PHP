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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <link rel="icon" href="CAMERA.png">
    <title  >STATION</title>
    <style>
        @font-face {
        font-family: Futura;
        src: url(futur.ttf);
        }
        body {
         background-image: url(background.jpg);
         background-size:cover;
         background-repeat: no-repeat;
         background-position: center;
         
        
        }
        .navbar {
        font-family: futura;
        
        }
        .box{
            margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        background-color:rgb(32, 30, 30);
        border-radius: 10px;
        width: 70%;
        height: 40%;
        padding: 50px;
        }
        .carousel .carousel-item{
            width: 100%;
            position:center;
        }
        h1{
            margin-top: 20px;
            text-align: center;
            font-family: futura;
            color: yellow;
            
        }
        h2{
            margin-top: 20px;
            text-align: center;
            font-family: futura;
            color: yellow;
            
            
        }
        .komentar{

        }
        .item{
            transition: .5s ease-in-out;
            padding: 10px;
        }
        .item:hover{
            filter: brightness(80%);

        }
        .border-library{
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        padding-top: 30px;
        padding-left: 30px;
        padding-right: 30px;
        border-radius: 10px;
        } 
       input[id=masukan1],[id=masukan2],[id=masukan3],[id=masukan4],[id=masukan5],
       [id=masukan6],[id=masukan7],[id=masukan8],[id=masukan9]{
        border-radius: 8px;
        margin-left: 30%;
        text-align: center;

      
       }
       
       input{
        
      border-radius: 8px;
   
       }

     </style>   
  </head>
  <body>
  
    <!--awalan navbar-->
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
      <!--akhiran nav bar-->
      <!---library-->
      <div class="container-fluid">
          <h1>LIBRARY FOTO</h1>
        <div class="border-library">
          <div class="row mt-4">
              
              <div class="item col-sm-6 col-md-4 mb-3">
                  <a href="13.jpg" class="fancybox" data-fancybox="gallery1">
                      <img src="13.jpg" width="100%" height="100%">
                  </a>
                  <input id="masukan1" placeholder="SKOR 1-10"/>
                      
                  
              </div>
              <div class="item col-sm-6 col-md-4 mb-3">
                <a href="5.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="5.jpg" width="100%" height="100%">
                    
                </a>
                <input id="masukan2" placeholder="SKOR 1-10" >
                      
            </div>
            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="6.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="6.jpg" width="100%" height="100% " >
                    
                </a>
                <input id="masukan3" placeholder="SKOR 1-10" >
                     
            </div>
            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="7.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="7.jpg" width="100%" height="100%">
                    
                </a>
                <input id="masukan4" placeholder="SKOR 1-10" >
                      
            </div>
            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="8.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="8.jpg" width="100%" height="100%">
                    
                </a>
                <input id="masukan5" placeholder="SKOR 1-10">
                      
            </div>
            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="9.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="9.jpg" width="100%" height="100%">
                   
                </a>
                <input id="masukan6" placeholder="SKOR 1-10">
                
            </div>
            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="10.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="10.jpg" width="100%" height="100%">
                   
                </a>
                <input id="masukan7" placeholder="SKOR 1-10">
                
            </div>
            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="11.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="11.jpg" width="100%" height="100%">
                    
                </a>
                <input id="masukan8" placeholder="SKOR 1-10">
        
            </div>
            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="12.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="12.jpg" width="100%" height="100%">
                    
                </a>
                <input id="masukan9" placeholder="SKOR 1-10">

            </div>
            
            </div>
          </div>
      </div>
      <div>
     
       <h1>SKOR DARI SELURUH FOTO</h1>
       <h2><input name="jumlahkan" type="submit" id="jumlah" value="jumlahkan" onclick="jumlahkan()" ></h2>
       <h2 id="hasil"></h2>
       <br>

       <h2><a class="nav-link text-white" type="submit" href="komentar.php" name="KOMENTAR">KOMENTAR</a></h2>
     
      </div>
  
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
      function jumlahkan(){

    var x3,x4,x5,x6,x7,x8,x9,total,totalasli;

    
    var x1=document.getElementById('masukan1').value;
    var x2=document.getElementById('masukan2').value;
    x3=document.getElementById('masukan3').value;
    x4=document.getElementById('masukan4').value;
    x5=document.getElementById('masukan5').value;
    x6=document.getElementById('masukan6').value;
    x7=document.getElementById('masukan7').value;
    x8=document.getElementById('masukan8').value;
    x9=document.getElementById('masukan9').value;
    total = (parseInt(x1)+parseInt(x2)+parseInt(x3)+parseInt(x4)+parseInt(x5)+parseInt(x6)+parseInt(x7)+parseInt(x8)+parseInt(x9))/9;
    totalasli=total.toFixed(2);
    if(x1 > 10 || x2>10 || x3>10 || x4>10 || x5>10 || x6>10 || x7>10 || x8>10 || x9>10 ){
      
      window.alert("SKOR HANYA BISA DARI 1 HINGGA 10 ");
   
    }
    else if(x1 <= 10 && x2<=10 && x3<=10 && x4<=10 && x5<=10 && x6<=10 && x7<=10 && x8<=10 && x9<=10 && x1 >= 1 && x2>=1 && x3>=1 && x4>=1 && x5>=1 && x6>=1 && x7>=1 && x8>=1 && x9>=1  ){
      
      document.getElementById("hasil").innerHTML=totalasli;
    }
    
}
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
