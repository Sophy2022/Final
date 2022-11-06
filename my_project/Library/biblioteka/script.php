<?php header('content-type:text/html;charset=utf-8')?>
<?php
echo "
<body style='background: white'>";
//Передаём переменным данные форм
//Присваиваем каждой форме переменную
$fio=$_POST['FIO'];
$email=$_POST['Email'];
$text=$_POST['text'];
//отправим данные из формы на e-mail админа
//Задаём переменные для письма админу о новом сообщении клиента

$adminemail = 'admin@mail.ru';
$sub = "Заявка на доставку";
$mes = "Посетитель: ".$fio." \n почта которого: ".$email." \n написал сообщение: ".$text;
//Отправляем письмо админу о новом сообщении
$verify = mail ($adminemail,$sub,$mes,"From: $email");
//проверка отправилось ли письмо
if ($verify == 'true')
{
echo "<p> Спасибо за отзыв. Наш модератор Свами свяжется.<br/><br/><a href='kontakt.html'> Вернуться назад</a></p>";
}
else
{
echo "<p> Сообщение не отправлено, попытайтесь повторить отправку<br/><br/> <a href='obr.html'> Вернуться назад</a></p>";
}
echo "
</body>";
?>
