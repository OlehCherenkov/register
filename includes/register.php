<?php
if (isset($_POST['submit'])){
include_once 'settingdb.php';

$login = mysqli_real_escape_string($CONNECT, $_POST['login']);
$email = mysqli_real_escape_string($CONNECT, $_POST['email']);
$password = mysqli_real_escape_string($CONNECT, $_POST['password']);
$realname = mysqli_real_escape_string($CONNECT, $_POST['realname']);
$value = mysqli_real_escape_string($CONNECT, $_POST['country']);
$birthday = mysqli_real_escape_string($CONNECT, $_POST['birthday']);

if (empty($login) || empty($email) || empty($password) || empty($realname)) {
header("Location: ../register.php?register=empty");
exit();
} 
else {
if (!preg_match("/^[а-яА-ЯёЁa-zA-Z0-9]*$/", $login) || !preg_match("/^[A-Za-zА-Яа-яЁё]*$/", $realname)) {
header("Location: ../register.php?register=invalid");
exit();
} 
else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
header("Location: ../register.php?register=email");
exit();
} 
else {
$SQL = "SELECT * FROM users WHERE login='$login'";
$Res = mysqli_query($CONNECT, $SQL);
$ResCheck = mysqli_num_rows($Res);
if ($ResCheck > 0) {
header("Location: ../register.php?register=usertaken");
exit();
} 
else {
$HashedPassword = password_hash($password, PASSWORD_DEFAULT);
$SQL = "INSERT INTO `users` VALUES ('', '$login', '$email', '$realname', '$HashedPassword', '$birthday', '$value', UNIX_TIMESTAMP());";
mysqli_query($CONNECT, $SQL);
header("Location: ../register.php?register=success");
exit();
}
}
}
}
} 
else {
header("Location: ../register.php");
exit();
}