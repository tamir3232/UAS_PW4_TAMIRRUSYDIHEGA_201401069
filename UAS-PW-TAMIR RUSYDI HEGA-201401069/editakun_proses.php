<?php

if(isset($_POST['rubah']))
{
    include('koneksi.php');
    $namaawal = $_POST['namaawal'];
     $namaakhir = $_POST['namaakhir'];
     $email = $_POST['email'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $tanggallahir = $_POST['tanggallahir'];
     $jeniskelamin = $_POST['jeniskelamin'];
    $update = mysqli_query($koneksi,"update register set namaawal='$namaawal', namaakhir='$namaakhir', 
    email='$email', password='$password', tanggallahir='$tanggallahir', jeniskelamin='$jeniskelamin' 
    where username='$username'")or die(mysqli_errot());

    if($update)
    {
        echo"<h2>data berhasil di update</h2>";
        echo"<script>window.location='adminakun.php'</script>";
    }
    else
    {
        echo"<h2>gagal di update</h2>";
        echo"<a href='edit.php ?nama=".$nama."'?kembali</a>";
    }
}

else{
    echo "<script> window.history.back()</script>";
}

?>