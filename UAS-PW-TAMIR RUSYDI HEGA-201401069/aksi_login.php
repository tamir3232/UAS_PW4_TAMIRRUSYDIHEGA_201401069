<?php
    session_start();
    include ('koneksi.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $con=mysqli_connect("localhost", "root","", "tugas");
   
    $query =mysqli_query($con, "select * from register where username = '$username' and password = '$password'");

    $cek=mysqli_num_rows($query);
 
    if ($cek == TRUE){
        $_SESSION['username']=$username;
        header("location:index.PHP");
        
    }
    else{
        echo"<script> alert('SALAH OII'); location='login.php'</script>";
    }

?>    