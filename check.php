<?php
$username = filter_var(trim($_POST['username']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);
$mail = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
if (mb_strlen($username)<5 || mb_strlen($username)>90) {
  echo "error";
  exit();
}
if (mb_strlen($mail)<5 || mb_strlen($mail)>50) {
  echo "error";
  exit();
}
if (mb_strlen($pass)<2 || mb_strlen($pass)>8) {
  echo "error";
  exit();
}
$pass = md5($pass."dassda12564");
$mysql = new mysqli('localhost','root','root','register');
$user = $mysql->query("INSERT INTO `users` (`username`, `mail`, `pass`)
VALUES('$username','$mail','$pass')");
$mysql->commit();
$result = $mysql->query("SELECT * from `users` WHERE `username` =
'$username' AND `pass` = '$pass'");
$user =$result->fetch_assoc();

setCookie('user', $user['username'], time() + 3600*24, "/");

$mysql->close();
header('Location: /index.php');
 ?>
