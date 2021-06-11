<?php
 if(isset($_POST['daftar'])){
     include_once 'koneksi.php';
     $namaawal = $_POST['namaawal'];
     $namaakhir = $_POST['namaakhir'];
     $email = $_POST['email'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $tanggallahir = $_POST['tanggallahir'];
     $jeniskelamin = $_POST['jeniskelamin'];
    $input = mysqli_query($koneksi,"insert into register values('$namaawal', '$namaakhir', '$email', '$username', 
    '$password', '$tanggallahir', '$jeniskelamin')");

    if($input)
    {
        echo"<h3>berhasil mendaftar</h3>";
        echo"<script>window.location='login.php'</script>";
    }
    else{
        echo"maaf anda gagal mendaftar";
      
    }
 }
 else
 {
     echo"<script>window.history.back()</script>";
 }

?>

