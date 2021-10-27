<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="masuk">
        <h1>UNIVERSITAS TEKNOLOGI YOGYAKARTA</h1>
    </div>
    <body>
   
        <div class="container">
          <h1>Login</h1>
            <form method="post" action="ceklogin.php">
                <label>NIM</label><br>
                <input type="text"  name="nim" placeholder="Masukkan Nim Anda"><br>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="Masukkan Password Anda"><br>
                <button type="submit">LOGIN</button>
            </form>
        </div>     
    </body>
</html>