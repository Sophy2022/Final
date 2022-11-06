<!DOCTYPE html>
<html>
<head>
<title>Библиотека</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="TopMainPan">
  <div id="topPan">
    <div id="topheaderPan"> <img src="images/logo1.png" alt="Gulde Line" width="228" height="54" border="0" title="Gulde Line" />
      <p class="captiontext">Электронные книги для образования, бизнеса, досуга</p>
    </div>
	
    <div id="topbodyleftPan">
      <ul>
        <li class="home"><a href="index.html">Главная</a></li>
        <li><a href="onas.html">О нас</a></li>
        <li><a href="avtor.html">Автор</a></li>
        <li><a href="top.html">Топ 100</a></li>
        <li><a href="novo.html">Новое</a></li>
		<li><a href="kontakt.html">Контакты</a></li>
		<li><a href="gostevaya.php">Гостевая</a></li>
        
      </ul>
    </div>
	
    <div id="topbodyrightPan">
      <h2>Афоризм</h2>
      <p align="justify" >Сколько дней труда, сколько ночей без сна, сколько усилий ума, сколько надежд и страхов, сколько долгих жизней усердного изучения вылиты здесь в мелких типографских шрифтах и стиснуты в тесном пространстве окружающих нас полок.

	  </p>
      <p class="more">Смит.А</p>
    </div>
  </div>
</div>
<div id="bodyMainPan">
 
</div>
<center>
<section id="content" style="color:black;" >

<?php
echo "

<!--Подключение обработчика формы--><form id='forma' action='scgos.php'method='post'>
<h1>Гостевая книга</h1>

<p>Имя пользователя<br /><input type='text' name='name'></p>
<p>E-mail<br /><input type='text' name='email'></p>
<p>Сообщение<br /><textarea name='mail' cols='40' rows='3'></textarea></p></p>
<p><input type='submit'></p></form><br /><br />
<h1 style='width:500px; margin-left:50px;'>Записи в нашей гостевой книге:</h1>
";
 	
// Подключаемся к БД
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$database = 'gostevaja';
 
mysql_connect($db_host, $db_user, $db_password);
mysql_select_db($database);

$r=mysql_query("SELECT * FROM kniga ORDER BY id DESC"); // Создаем SQL запрос, //сортировка по убыванию ID
for($i=0; $i< mysql_num_rows($r); $i++) // Перебор всех записей в таблице
{
$f=mysql_fetch_array($r); // Обрабатывает ряд результата запроса, возвращая ассоциативный массив, численный массив или оба
print "<table id='zapici'><tr id='z1'><td>$f[1]<hr></td></tr><trid='z2'><td>$f[2]:</td></tr><tr><td>$f[4] <br></td></tr></table>"; // Вывод значений в HTML, где $f[0], значение первого столбца, $f[1] - значение второго и т.д. 
}
?>


</section>
</center>
<div id="footermainPan">

  <div id="footerPan">
    <ul>
      <li class="home"><a href="index.html">Главная |</a></li>
        <li><a href="onas.html">О нас |</a></li>
        <li><a href="avtor.html">Автор |</a></li>
        <li><a href="top.html">Топ 100 |</a></li>
        <li><a href="novo.html">Новое | </a></li>
		<li><a href="kontakt.html">Контакты</a></li>
    </ul>
    <p class="copyright">2022 &copy Все права защищены.</p>
    
    
  </div>
</div>
</body>
</html>
