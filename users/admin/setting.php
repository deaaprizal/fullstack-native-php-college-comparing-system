<?php
    session_start();

    $username = $_SESSION['username'];
    $hak_akses = $_SESSION['hak_akses'];

    if(!isset($username)){
        header('location: ../../');
    }
    if($hak_akses == 'user'){
        header('location:../dashboard.php');
    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Setting</title>
  </head>
  <body>
    <a href="ubahPassword.php">Ubah Password</a>
  </body>
</html>
