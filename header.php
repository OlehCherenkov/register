<?php
session_start();
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "1234";
$dbName = "reg";
$CONNECT = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
mysqli_set_charset($CONNECT, 'utf8');
function Head($p1) {
echo '<!DOCTYPE html><html><head><meta charset="utf-8" /><title>'.$p1.'</title><meta name="keywords" content="" /><meta name="description" content="" /><link rel="stylesheet" type="text/css" href="style.css"></head>';
}

function Menu () {
if (isset($_SESSION['USER_ID'])) {
echo '<a href="index.php" id="Brand">Главная</a>
	  <div id="info">Логин: '.$_SESSION['USER_LOGIN'].'('.$_SESSION['USER_EMAIL'].')</div>
	  <form action="includes/logout.php" method="POST">
	  <input type="submit" name="submit" id="exit" value="Выход"></input>
	  </form>';
} 
else {
echo '	<a href="index.php" id="Brand">Главная</a>
		<a href="register.php" id="Menu1">Регистрация</a>
		<a href="login.php" id="Menu2">Вход</a>';
}
}
function Footer () {
echo '<footer class="footer"></footer>';
}
?>
