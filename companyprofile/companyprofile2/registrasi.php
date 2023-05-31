<?php
session_start();

if (isset($_SESSION["login"])) {
  header("location: index.php");
  exit;
}

require 'function.php';

if (isset($_POST["submit"])) {
  if (registrasi($_POST) > 0) {
    ?><script type="text/javascript">alert('Anda Berhasil Mendaftarkan Akun Baru');
      document.location.href='index.php'</script> <?php
      exit;
  }
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrasi</title>
    <style media="screen">
      body{
        text-align: center;
        font-family: cursive;
        margin-top: 100px;
        background: salmon;
        color: white;
      }
      hr{
        width: 250px;
        border: 2px solid white;
      }
      input{
        padding: 10px;
        width: 350px;
        font-family: cursive;
        background: transparent;
        color: white;
        border-radius: 10px;
        border: 3px solid white;
        margin: 10px;
        text-align: center;
        font-size: 15pt;
      }
      input:hover{
        cursor: pointer;
      }
      button{
        padding: 14px;
        width: 150px;
        font-family: cursive;
        background: white;
        border: 1px solid black;
        font-size: 13pt;
        border-radius: 10px;
      }
      button:hover{
        background: green;
        color: white;
        border: 1px solid white;
        cursor: pointer;
      }
      a:hover{
        color: white;
      }
    </style>
  </head>
  <body>
    <h1>Registrasi</h1><hr><br>
    <form class="" action="" method="post">
      <input type="text" name="username" placeholder="Masukan Username Anda" autocomplete="off" required>
      <br><br>
      <input type="password" name="password" placeholder="Masukan Password Anda" autocomplete="off" required>
      <br><br>
      <input type="password" name="password2" placeholder="Konfirmasi Password Anda" autocomplete="off" required>
      <br><br>
      <button type="submit" name="submit">Registrasi</button>
    </form><br>
    <h3><a href="login.php">Login</a></h3>
  </body>
</html>
