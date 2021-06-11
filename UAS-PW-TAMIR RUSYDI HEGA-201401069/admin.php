<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="CAMERA.png">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section>
        
            
            <form method="POST" action="adminaksi_login.php">
                
                <table class="login box">
                    <tr>
                        <td><h1>LOGIN</h1></td>
                        
                    </tr>
                    <tr>
                        <td>
                            <label for="NAMA AWAl">Username:</label>
                            <br>
                            <input required name="username" placeholder="Your Username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="PASSWORD">Password:</label>
                            <br>
                            <input required type="password" name="password" placeholder="your password..">
                        </td>

                    </tr>
                    
                    <tr>
                        <td>
                            <input type="submit" value="SUBMIT"></input>

                        </td>
                    </tr>
                    
            </form>


        </section>
    </main>
    
</body>
</html>