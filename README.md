
A simple login and signup system with PHP, MySQL using CSS for the form design.
# install
Creating the MySQL Database
Create database "Name" and create tables "users" and "country":
```sql
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `realname` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `country` varchar(64) NOT NULL,
  `regdate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `country` (
  `id` varchar(2) CHARACTER SET utf8 NOT NULL,
  `value` varchar(64) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп даних таблиці `country`
--

INSERT INTO `country` (`id`, `value`) VALUES
('AC', 'о-в Вознесения'),
('AD', 'Андорра'),
('AE', 'ОАЭ'),
('AF', 'Афганистан'),
('AG', 'Антигуа и Барбуда'),
('AI', 'Ангилья'),
('AL', 'Албания'),
('AM', 'Армения'),
('AO', 'Ангола'),
('AQ', 'Антарктида'),
('AR', 'Аргентина'),
('AS', 'Американское Самоа'),
('AT', 'Австрия'),
('AU', 'Австралия'),
('AW', 'Аруба'),
('AX', 'Аландские о-ва'),
('AZ', 'Азербайджан'),
('BA', 'Босния и Герцеговина'),
('BB', 'Барбадос'),
('BD', 'Бангладеш'),
('BE', 'Бельгия'),
('BF', 'Буркина-Фасо'),
('BG', 'Болгария'),
('BH', 'Бахрейн'),
('BI', 'Бурунди'),
('BJ', 'Бенин'),
('BL', 'Сен-Бартельми'),
('BM', 'Бермудские о-ва'),
('BN', 'Бруней-Даруссалам'),
('BO', 'Боливия'),
('BQ', 'Бонэйр, Синт-Эстатиус и Саба'),
('BR', 'Бразилия'),
('BS', 'Багамские о-ва'),
('BT', 'Бутан'),
('BW', 'Ботсвана'),
('BY', 'Беларусь'),
('BZ', 'Белиз'),
('CA', 'Канада'),
('CC', 'Кокосовые о-ва'),
('CD', 'Конго - Киншаса'),
('CF', 'ЦАР'),
('CG', 'Конго - Браззавиль'),
('CH', 'Швейцария'),
('CI', 'Кот-д’Ивуар'),
('CK', 'о-ва Кука'),
('CL', 'Чили'),
('CM', 'Камерун'),
('CN', 'Китай'),
('CO', 'Колумбия'),
('CR', 'Коста-Рика'),
('CU', 'Куба'),
('CV', 'Кабо-Верде'),
('CW', 'Кюрасао'),
('CX', 'о-в Рождества'),
('CY', 'Кипр'),
('CZ', 'Чехия'),
('DE', 'Германия'),
('DG', 'Диего-Гарсия'),
('DJ', 'Джибути'),
('DK', 'Дания'),
('DM', 'Доминика'),
('DO', 'Доминиканская Республика'),
('DZ', 'Алжир'),
('EA', 'Сеута и Мелилья'),
('EC', 'Эквадор'),
('EE', 'Эстония'),
('EG', 'Египет'),
('EH', 'Западная Сахара'),
('ER', 'Эритрея'),
('ES', 'Испания'),
('ET', 'Эфиопия'),
('FI', 'Финляндия'),
('FJ', 'Фиджи'),
('FK', 'Фолклендские о-ва'),
('FM', 'Федеративные Штаты Микронезии'),
('FO', 'Фарерские о-ва'),
('FR', 'Франция'),
('GA', 'Габон'),
('GB', 'Великобритания'),
('GD', 'Гренада'),
('GE', 'Грузия'),
('GF', 'Французская Гвиана'),
('GG', 'Гернси'),
('GH', 'Гана'),
('GI', 'Гибралтар'),
('GL', 'Гренландия'),
('GM', 'Гамбия'),
('GN', 'Гвинея'),
('GP', 'Гваделупа'),
('GQ', 'Экваториальная Гвинея'),
('GR', 'Греция'),
('GS', 'Южная Георгия и Южные Сандвичевы о-ва'),
('GT', 'Гватемала'),
('GU', 'Гуам'),
('GW', 'Гвинея-Бисау'),
('GY', 'Гайана'),
('HK', 'Гонконг (особый район)'),
('HN', 'Гондурас'),
('HR', 'Хорватия'),
('HT', 'Гаити'),
('HU', 'Венгрия'),
('IC', 'Канарские о-ва'),
('ID', 'Индонезия'),
('IE', 'Ирландия'),
('IL', 'Израиль'),
('IM', 'О-в Мэн'),
('IN', 'Индия'),
('IO', 'Британская территория в Индийском океане'),
('IQ', 'Ирак'),
('IR', 'Иран'),
('IS', 'Исландия'),
('IT', 'Италия'),
('JE', 'Джерси'),
('JM', 'Ямайка'),
('JO', 'Иордания'),
('JP', 'Япония'),
('KE', 'Кения'),
('KG', 'Киргизия'),
('KH', 'Камбоджа'),
('KI', 'Кирибати'),
('KM', 'Коморские о-ва'),
('KN', 'Сент-Китс и Невис'),
('KP', 'КНДР'),
('KR', 'Республика Корея'),
('KW', 'Кувейт'),
('KY', 'Каймановы о-ва'),
('KZ', 'Казахстан'),
('LA', 'Лаос'),
('LB', 'Ливан'),
('LC', 'Сент-Люсия'),
('LI', 'Лихтенштейн'),
('LK', 'Шри-Ланка'),
('LR', 'Либерия'),
('LS', 'Лесото'),
('LT', 'Литва'),
('LU', 'Люксембург'),
('LV', 'Латвия'),
('LY', 'Ливия'),
('MA', 'Марокко'),
('MC', 'Монако'),
('MD', 'Молдова'),
('ME', 'Черногория'),
('MF', 'Сен-Мартен'),
('MG', 'Мадагаскар'),
('MH', 'Маршалловы о-ва'),
('MK', 'Македония'),
('ML', 'Мали'),
('MM', 'Мьянма (Бирма)'),
('MN', 'Монголия'),
('MO', 'Макао (особый район)'),
('MP', 'Северные Марианские о-ва'),
('MQ', 'Мартиника'),
('MR', 'Мавритания'),
('MS', 'Монтсеррат'),
('MT', 'Мальта'),
('MU', 'Маврикий'),
('MV', 'Мальдивские о-ва'),
('MW', 'Малави'),
('MX', 'Мексика'),
('MY', 'Малайзия'),
('MZ', 'Мозамбик'),
('NA', 'Намибия'),
('NC', 'Новая Каледония'),
('NE', 'Нигер'),
('NF', 'о-в Норфолк'),
('NG', 'Нигерия'),
('NI', 'Никарагуа'),
('NL', 'Нидерланды'),
('NO', 'Норвегия'),
('NP', 'Непал'),
('NR', 'Науру'),
('NU', 'Ниуэ'),
('NZ', 'Новая Зеландия'),
('OM', 'Оман'),
('PA', 'Панама'),
('PE', 'Перу'),
('PF', 'Французская Полинезия'),
('PG', 'Папуа – Новая Гвинея'),
('PH', 'Филиппины'),
('PK', 'Пакистан'),
('PL', 'Польша'),
('PM', 'Сен-Пьер и Микелон'),
('PN', 'Питкэрн'),
('PR', 'Пуэрто-Рико'),
('PS', 'Палестинские территории'),
('PT', 'Португалия'),
('PW', 'Палау'),
('PY', 'Парагвай'),
('QA', 'Катар'),
('RE', 'Реюньон'),
('RO', 'Румыния'),
('RS', 'Сербия'),
('RU', 'Россия'),
('RW', 'Руанда'),
('SA', 'Саудовская Аравия'),
('SB', 'Соломоновы о-ва'),
('SC', 'Сейшельские о-ва'),
('SD', 'Судан'),
('SE', 'Швеция'),
('SG', 'Сингапур'),
('SH', 'О-в Св. Елены'),
('SI', 'Словения'),
('SJ', 'Шпицберген и Ян-Майен'),
('SK', 'Словакия'),
('SL', 'Сьерра-Леоне'),
('SM', 'Сан-Марино'),
('SN', 'Сенегал'),
('SO', 'Сомали'),
('SR', 'Суринам'),
('SS', 'Южный Судан'),
('ST', 'Сан-Томе и Принсипи'),
('SV', 'Сальвадор'),
('SX', 'Синт-Мартен'),
('SY', 'Сирия'),
('SZ', 'Свазиленд'),
('TA', 'Тристан-да-Кунья'),
('TC', 'О-ва Тёркс и Кайкос'),
('TD', 'Чад'),
('TF', 'Французские Южные Территории'),
('TG', 'Того'),
('TH', 'Таиланд'),
('TJ', 'Таджикистан'),
('TK', 'Токелау'),
('TL', 'Восточный Тимор'),
('TM', 'Туркменистан'),
('TN', 'Тунис'),
('TO', 'Тонга'),
('TR', 'Турция'),
('TT', 'Тринидад и Тобаго'),
('TV', 'Тувалу'),
('TW', 'Тайвань'),
('TZ', 'Танзания'),
('UA', 'Украина'),
('UG', 'Уганда'),
('UM', 'Внешние малые о-ва (США)'),
('US', 'Соединенные Штаты'),
('UY', 'Уругвай'),
('UZ', 'Узбекистан'),
('VA', 'Ватикан'),
('VC', 'Сент-Винсент и Гренадины'),
('VE', 'Венесуэла'),
('VG', 'Виргинские о-ва (Британские)'),
('VI', 'Виргинские о-ва (США)'),
('VN', 'Вьетнам'),
('VU', 'Вануату'),
('WF', 'Уоллис и Футуна'),
('WS', 'Самоа'),
('XK', 'Косово'),
('YE', 'Йемен'),
('YT', 'Майотта'),
('ZA', 'ЮАР'),
('ZM', 'Замбия'),
('ZW', 'Зимбабве');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);
COMMIT;
```
### Setup the `includes/settingdb.php` file
```php
<?php
$dbServername = ""; //Host name
$dbUsername = ""; //Mysql user
$dbPassword = ""; //Mysql password
$dbName = ""; //Mysql database name

$CONNECT = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>

```
### Setup the `header.php` file

```php
<?php
session_start();
$dbServername = ""; //Host name
$dbUsername = ""; //Mysql user
$dbPassword = ""; //Mysql password
$dbName = ""; //Mysql database name
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
```
### Register/Login Workflow:
> 1) Create new user using `register.php` form
> (note: validation occurs both client and server side)
<b>Validation requires: </b>
> &nbsp;- Passwords to be at least 5 characters
> &nbsp;- Valid email address
> &nbsp;- Unique login
> 2) Password gets hashed
> 3) User gets added to database as unverified
> 4) System will display current user email, name and ‘logout’ link. 
> 5) User can log out by clicking on link. 
> 6) User can sign in with their login + password OR email + password pairs.

