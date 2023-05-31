<?php
session_start();

require 'function.php';

if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
  $id = $_COOKIE["id"];
  $key = $_COOKIE["key"];

  $row = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");

  $rows = mysqli_fetch_assoc($row);

  if ($key === hash('sha256', $rows["username"])) {
    $_SESSION["login"] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("location: index.php");
  exit;
}

if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  if (mysqli_num_rows($query) === 1) {

    $result = mysqli_fetch_assoc($query);

    if (password_verify($password, $result["password"])) {

      $_SESSION["login"] = true;

      if (isset($_POST["remmember"])) {
        setcookie('id', $result["id"], time() + 60);
        setcookie('key', hash('sha256', $result["username"]), time() + 60);
      }

      header("location: index.php");
      exit;
    }
  }
  $error = true;

}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style media="screen">
      body{
        text-align: center;
        font-family: cursive;
        margin-top: 150px;
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
    <h1>Login</h1><hr><br>
    <?php if(isset($error)): ?>
      <script type="text/javascript">alert('Username Atau Password Anda Tidak Di Temukan')</script>
    <?php endif; ?>
    <form class="" action="" method="post">
      <input type="text" name="username" placeholder="Masukan Username Anda" autocomplete="off" required>
      <br><br>
      <input type="password" name="password" placeholder="Masukan Password Anda" autocomplete="off" required>
      <br><br>
      <label for="remmember">Remmember Me</label><br>
      <input type="checkbox" name="remmember" id="remmember">
      <br><br>
      <button type="submit" name="submit">Login</button>
    </form><br>
    <h3><a href="registrasi.php">Registrasi</a></h3>
  </body>
</html>
