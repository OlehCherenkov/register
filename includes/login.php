<?php
session_start();
if (isset($_POST['submit'])) {
include 'settingdb.php';
$login = mysqli_real_escape_string($CONNECT, $_POST['login']);
$password = mysqli_real_escape_string($CONNECT, $_POST['password']);
if (empty($login) || empty($password)) {
header("Location: ../index.php?login=empty");
exit();
} 
else {
$SQL = "SELECT * FROM users WHERE login='$login' OR email='$login'";
$Res = mysqli_query($CONNECT, $SQL);
$ResCheck = mysqli_num_rows($Res);
if ($ResCheck < 1) {
header("Location: ../index.php?login=error");
exit();
} 
else {
if ($Row = mysqli_fetch_assoc($Res)) {
$HashedRasswordCheck = password_verify($password, $Row['password']);
if ($HashedRasswordCheck == false) {
header("Location: ../index.php?login=error");
exit();
} 
elseif ($HashedRasswordCheck == true) {
$_SESSION['USER_ID'] = $Row['id'];
$_SESSION['USER_LOGIN'] = $Row['login'];
$_SESSION['USER_EMAIL'] = $Row['email'];
$_SESSION['USER_REALNAME'] = $Row['realname'];
$_SESSION['USER_COUNTRY'] = $Row['country'];
header("Location: ../index.php?login=success");
exit();
}
}
}
}
} else {
header("Location: ../index.php?login=error");
exit();
}