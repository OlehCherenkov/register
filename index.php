<?php
include_once 'header.php';
?>
<?php Head('Главная страница') ?>
<body>
<div class="wrapper">
<div class="header"><?php Menu() ?></div>
<div class="content">
Главная страница
<div class="Page">
<?php
if (isset($_SESSION['USER_ID'])) {
echo "Вы успешно авторизованы!";
}
?>
</div>
</div>

<?php Footer() ?>
</div>
</body>
</html>
