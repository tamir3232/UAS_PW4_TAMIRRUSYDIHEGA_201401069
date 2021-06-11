
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="CAMERA.png">
    <title>REGISTER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include('koneksi.php');
    $username = $_GET['username'];
    $show = mysqli_query($koneksi,"select * from register where username ='$username'") or die(mysqli_error());
    if(mysqli_num_rows($show) == 0)
    {
        echo"<script>window.history.back()</script>";

    }
    else{
        $d= mysqli_fetch_assoc($show);
    }
    ?>
    <main>
        <section>
            
            <form method="POST" action="editakun_proses.php">
                
                <table class="register rbox">
                    <tr>
                
                        <td colspan="2">
                            <h1>EDIT AKUN</h1>
                        </td>
                        <td></td>
                    </tr>
                
                    <tr>
                        <td>
                            <label for="NAMAAWAL">Nama Awal</label>
                            <br>
                            <input name="namaawal" placeholder="Nama Awal" value="<?php echo $d['namaawal']; ?>">
                        </td>
                        <td>
                            <label for="NAMAAKHIR">Nama Akhir </label>
                            <br>
                            <input required name="namaakhir" placeholder="Nama Akhir" value="<?php echo $d['namaakhir']; ?>">
                          
                        </td>
                    </tr>
                    <tr>
                        
                       
                    </tr>
                    <tr>
                        <td>
                            <label for="EMAIL">Email</label>
                            <br>
                            <input required type="email" name="email" value="<?php echo $d['email']; ?>">
                        </td>
                        

                    </tr>
                    
                    <tr>
                        <td>
                            <label for="username">Username</label>
                            <br>
                            <input readonly="readonly" type="username" name="username" value="<?php echo $d['username']; ?>">
                        </td>
                        <td>
                            <label for="PASSWORD">Password:</label>
                            <br>
                            <input required  name="password" value="<?php echo $d['password']; ?>">
                        </td>
                         

                    </tr>
                    <td> 
                        <label for="start">Tanggal Lahir</label>
                        <br>
                        <input type="date" id="start" name="tanggallahir" value="<?php echo $d['tanggallahir']; ?>"
                        min="1000-01-01" max="2021-12-31">
                    </td>
                    <td>
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <br>
                        <select name="jeniskelamin" required>
                            <?php
                                 if($d['jeniskelamin'] == 'Laki-Laki'){
                                    echo"<option>Laki-Laki</option>";
                                    echo"<option>Perempuan</option>";
                                 }
                                 else{
                                    echo"<option>Perempuan</option>";
                                    echo"<option>Laki-Laki</option>";
                                 }
                            ?>
    
                            
                        </select>
                        <br>
                    </td>
                    
                    <tr>
                        <td colspan="2">
                            <br>
                            <input  type="submit" name="rubah" value="SUBMIT"></input>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="login.php">Sudah Ada Akun</a>
                        </td>
                    </tr>
                </table>
            </form>







        </section>
    </main>
    
</body>
</html> 