<?php

if(isset($_POST['rubah']))
{
    include('koneksi.php');
    $nama = $_POST['nama'];
    $komentar = $_POST['komentaran'];
    $foto = $_POST['foto'];
    $update= mysqli_query($koneksi,"update niali2 set 
    komentar = '$komentar',
    foto='$foto'
    where nama='$nama'")
    or die(mysqli_errot());

    if($update)
    {
        echo"<h2>data berhasil di update</h2>";
        echo"<script>window.location='adminhalamankomentar.php'</script>";
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