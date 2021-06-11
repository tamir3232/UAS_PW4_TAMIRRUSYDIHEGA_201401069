
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
    <main>
        <section>
            
            <form method="POST" action="register_proses.php">
                
                <table class="register rbox">
                    <tr>
                
                        <td colspan="2">
                            <h1>BUAT AKUN</h1>
                        </td>
                        <td></td>
                    </tr>
                
                    <tr>
                        <td>
                            <label for="NAMAAWAL">Nama Awal</label>
                            <br>
                            <input required name="namaawal" placeholder="Nama Awal">
                        </td>
                        <td>
                            <label for="NAMAAKHIR">Nama Akhir </label>
                            <br>
                            <input required name="namaakhir" placeholder="Nama Akhir">
                          
                        </td>
                    </tr>
                    <tr>
                        
                       
                    </tr>
                    <tr>
                        <td>
                            <label for="EMAIL">Email</label>
                            <br>
                            <input required type="email" name="email" placeholder="samsul@****.com">
                        </td>
                        

                    </tr>
                    
                    <tr>
                        <td>
                            <label for="username">Username</label>
                            <br>
                            <input required type="username" name="username" placeholder="samsul123">
                        </td>
                        <td>
                            <label for="PASSWORD">Password:</label>
                            <br>
                            <input required type="password" name="password" placeholder="your password..">
                        </td>
                         

                    </tr>
                    <td> 
                        <label for="start">Tanggal Lahir</label>
                        <br>
                        <input type="date" id="start" name="tanggallahir" value="2004-04-09"
                        min="1000-01-01" max="2021-12-31">
                    </td>
                    <td>
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <br>
                        <select name="jeniskelamin" required>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                        <br>
                    </td>
                    
                    <tr>
                        <td colspan="2">
                            <br>
                            <input  type="submit" name="daftar" value="SUBMIT"></input>

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