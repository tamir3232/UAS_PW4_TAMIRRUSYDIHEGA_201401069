<?php
 if(isset($_POST['komentar1'])){
     include 'koneksi.php';
     $nama=$_POST['nama'];
     $komentar=$_POST['komentaran'];
     $foto=$_POST['foto'];
     $input = mysqli_query($koneksi,"insert into niali2 values('$nama','$komentar','$foto')");

     if($input)
    {
        echo"<h2>data berhasil di update</h2>";
        echo"<script>window.location='halamankomentar.php'</script>";
    }
    else{
        echo"maaf anda gagal menginput skor";
        echo"<script>window.location='komentar.php'</script>";
    }

 }
 else{
    echo"<script>window.history.back()</script>";
}
?>