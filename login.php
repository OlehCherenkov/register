<?php
include_once 'header.php';
Head('Вход')
?>
<body>
<div class="wrapper">
<div class="header"><?php Menu();?></div>
<div class="content"><br>Вход
<div class="Page">
<form action="includes/login.php" method="POST">
<table>
<tr>
    <td><label for="l1">Логин или эл.почта</label></td>
	<td><input type="text" name="login" id="l1" placeholder="Логин или эл.почта"></td>
	<tr>
	<td><label for="p1">Пароль</label></td>
	<td><input type="password" name="password" id="p1" placeholder="Пароль"></td>
<tr>
</table>
<input type="submit" name="submit" value="Вход"></input>
</form>
</div>
</div>
<?php Footer() ?>
</div>
</body>
</html>