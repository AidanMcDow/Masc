<?php
  include_once 'dbh.inc.php';

  $username = mysqli_real_escape_string($conn, $_POST['uname']);
  $password = mysqli_real_escape_string($_POST['psw']);

  $sql = "INSERT INTO `login`(`user`, `pass`) VALUES ('$username', '$password');";
  mysqli_query($conn, $sql);

 header("Location: ../index.php?signup=success");
