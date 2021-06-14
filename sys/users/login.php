<?php

require 'sys/db.php';

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

$result = mysqli_query($conn, "SELECT * FROM users WHERE 'username' = $username");
var_dump($result);
die;
if ($result) {
  $row = mysqli_fetch_assoc($result);
  if ($password == $row['password']) {
    if ($row['role'] == 1) {
      echo "Halaman admin";
    } else {
      echo "Halaman non admin";
    }
  } else {
    echo 'Wrong password';
  }
} else {
  echo 'User not found';
}
