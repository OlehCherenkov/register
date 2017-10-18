<?php
include_once 'header.php';
Head('Регистрация')
?>
<body>
<div class="wrapper">
<div class="header">
<?php Menu()?>
</div>
<div class="content"><br>Регистрация
<div class="Page">
<form action="includes/register.php" method="POST">
<table>
<tr>
    <td><label for="l">Логин</label></td>
	<td><input type="text" name="login" id="l" placeholder="Логин" required></td>
	<tr>
	<td><label for="e">Эл. почта</label></td>
	<td><input type="email" name="email" id="e" placeholder="E-Mail" required></td>
	<tr>
	<td><label for="p">Пароль</label></td>
	<td><input type="password" name="password" id="p" placeholder="Пароль" pattern="[A-Za-z-0-9]{5,20}" title="Не менее 5 и неболее 20 латинских символов или цифр." maxlength="20" required></td>
	<tr>
	<td><label for="rn">Имя</label></td>
	<td><input type="text" name="realname" id="rn" placeholder="Имя" required></td>
	<tr>
<td><label for="c">Страна</label></td>
<td><select name="country" id="c">
<?php 
$Query = "SELECT * FROM country";
$Res = mysqli_query($CONNECT, $Query);
foreach ($Res as $Country){
?>
<option value="<?php echo $Country[value]; ?>"><?php echo $Country[value]; ?></option>
<?php
}
?>
</select>
</select></td>
<tr>
	<td><label for="b">Дата рождения</label></td>
	<td><input type="date" name="birthday" id="b"></td>
<tr>
</table>
<input type="checkbox" name="rules" required>Правила
<br><input type="submit" name="submit" value="Регистрация"></input>
</form>
</div>
</div>

<?php Footer() ?>
</div>
</body>
</html>