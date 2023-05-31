<?php 

$conn = mysqli_connect("localhost", "root", "", "login");

function registrasi($daftar){
  global $conn;
  $username = strtolower(stripslashes($daftar["username"]));
  $password = mysqli_real_escape_string($conn, $daftar["password"]);
  $password2 = mysqli_real_escape_string($conn, $daftar["password2"]);

  $query = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

  if (mysqli_fetch_assoc($query)) {
    ?><script type="text/javascript">alert('Username Sudah Ada, Silahkan Cari Username Lain')</script><?php
    return false;
  }

  if ($password !== $password2) {
    ?><script type="text/javascript">alert('Konfirmasi Password Tidak Sama')</script> <?php
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($conn, "INSERT INTO users
                            VALUES
                      ('', '$username', '$password')
  ");
  return mysqli_affected_rows($conn);

}

?>