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
    <?php
    include('koneksi.php');
    $nama = $_GET['nama'];
    $show = mysqli_query($koneksi,"select * from niali2 where nama ='$nama'") or die(mysqli_error());
    if(mysqli_num_rows($show) == 0)
    {
        echo"<script>window.history.back()</script>";

    }
    else{
        $d= mysqli_fetch_assoc($show);
    }
    ?>
    
    <form action="edit_proses.php" method="post">
                 
                <table class="login box">
                    <tr>
                        <td><h1>KOMENTAR</h1></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="NAMA">NAMA</label>
                            <br>
                            <input readonly="readonly" type="text" name="nama" value="<?php echo $nama; ?>">
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="KOMENTAR">KOMENTAR</label>
                            <br>
                            <input type="komentar" name="komentaran" value="<?php echo $d['komentar']; ?>">
                            <br>
                            <label>FOTO PROFIL</label>
                            <input name="foto" Type="file" label=""> 
                            
                        </td>

                            
                    </tr>
                    
                    <tr>
                        <td>
                            <input type="submit" name="rubah" type="submit" value="SUBMIT"></input>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="adminhalamankomentar.php">KEMBALI</a>
                        </td>
                    </tr>
                </table>
    </form>

</body>