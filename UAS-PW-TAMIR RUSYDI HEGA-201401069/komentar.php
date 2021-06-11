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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="CAMERA.png">
    <title>KOMENTAR</title>
    <link rel="stylesheet" href="STYLEKOMENTAR.CSS">
</head>
<body>
    <main>
        <section>
        
            
            <form method="POST" action="komentar_proses.php">
                 
                <table class="login box">
                    <tr>
                        <td><h1>KOMENTAR</h1></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="NAMA">NAMA</label>
                            <br>
                            <input required type="nama" name="nama" placeholder="NAMA ANDA">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="KOMENTAR">KOMENTAR</label>
                            <br>
                            <input required type="KOMENTAR" name="komentaran" placeholder="KOMENTAR ANDA">
                            <br>
                            <label>FOTO PROFIL</label>
                            <input name="foto" Type="file">
                        </td>

                            
                    </tr>
                    
                    <tr>
                        <td>
                            <input name="komentar1" type="submit" value="SUBMIT"></input>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="library.php">KEMBALI</a>
                        </td>
                    </tr>
                </table>
            </form>


        </section>
    </main>
    
</body>
</html>