<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
   <title>Ваше сообщение успешно отправлено</title>
</head>

<body>
<?php
$sait = "<p><a href=\"../../main_menu/index.html\">Вернуться на главную</a></p>";
$tel = @ trim ($_POST['tel']);
# проверка, переданы ли все данные
if (empty ($_POST['tel'])) {
	echo 'Сообщение не отправлено!Напишите корректно еще раз.';
	exit;
}else {
	# отправка данных на мыло админу
mail("creative.mashine@gmail.com",
	 "Сообщение с сайта отправитель: Обратная связь",
  "телефон заказчика: $tel");
	echo "Сообщение успешно отправлено! С вами свяжутся в ближайшее время.<br/> $sait";
	exit;
}
/**вывод резалта что отправлено данные**/
?>

</body>
</html>