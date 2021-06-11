<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPUS</title>
</head>
<body>
<?php
if(isset($_GET['nama'])){
    include('koneksi.php');
    $nama = $_GET['nama'];
    $cek = mysqli_query($koneksi,"select * from niali2 where nama ='$nama'") or die(mysqli_error());
    if(mysqli_num_rows($cek) == 0)
    {
       echo"<script>window.history.back()</script>";

    }
    else{
        $del= mysqli_query($koneksi,"delete from niali2 where nama='$nama'");
        if($del)
        {
            echo"<h2>data berhasil di hapus</h2>";
            echo"<script>window.location='adminhalamankomentar.php'</script>";
        }
        else
        {
            echo"<h3>gagal menghapus data</h2>";
            echo"<script>window.location ='adminhalamankomentar.php'</script>";
        }
}   
}
else {
    echo"<script>window.history.back()</script>";
}
    ?>
    
</body>
</html>