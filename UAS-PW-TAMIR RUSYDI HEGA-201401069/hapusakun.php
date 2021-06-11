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
if(isset($_GET['username']))
{
    include('koneksi.php');
    $username = $_GET['username'];
    $cek = mysqli_query($koneksi,"select * from register where username ='$username'") or die(mysqli_error());
    if(mysqli_num_rows($cek) == 0)
    {
       echo"<script>window.history.back()</script>";

    }
    else{
        $del= mysqli_query($koneksi,"delete from register where username='$username'");
        if($del)
        {
           
            echo"<script>window.location='adminakun.php'</script>";
        }
        else
        {
            echo"<h3>gagal menghapus data</h2>";
            echo"<script>window.location ='adminakun.php'</script>";
        }
    }   
}
else {
    echo"<script>window.history.back()</script>";
}
 ?>
    
</body>
</html>