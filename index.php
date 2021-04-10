<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
  <div class="kotak_login">
  <p class="tulisan_login">APLIKASI PEMANTAUAN COVID-19</p>
 
  <form action="proseslogin.php" method="POST">
    <label>Username</label>
    <input type="text" name="username" class="form_login" placeholder="Username">
 
    <label>Password</label>
    <input type="password" name="password" class="form_login" placeholder="Password">
 
    <input type="submit" class="tombol_login" value="LOGIN" name="login">
 
  </form>
</div>

</body>
</html>