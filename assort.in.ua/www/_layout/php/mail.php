<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
   <title>Ваше сообщение успешно отправлено</title>
</head>

<body>
<?php
$sait = "<p><a href=\"../../remont/index.html\">Вернуться назад на страницу</a></p>";
$firstname = @ trim ($_POST['firstname']);
$email = @ trim ($_POST['email']);
$tel = @ trim ($_POST['tel']);
$message = @ trim ($_POST['message']);

/*проверка, переданы ли все данные*/
if (!empty ($_POST['firstname']) and !empty ($_POST['email']) and !empty ($_POST['tel']) and !empty( $_POST['message'])) {
	$name = @ trim ($_POST['firstname']);
	$email = @ trim ($_POST['email']);
	$tel = @ trim ($_POST['tel']);
	$message = @ trim ($_POST['message']);
# отправка данных на мыло админу
mail("creative.mashine@gmail.com",
	 "Сообщение с сайта отправитель: форма_лендинга",
  "Имя заказчика: $firstname \n
   Email заказчика: $email \n
   телефон заказчика: $tel \n
   Сообщение: $message") ;
	/**вывод резалта что отправлено данные**/
	echo "Сообщение отправлено! В ближайшее время мы свяжемся с Вами<br/> $sait";
	exit;
}else {
	echo "Ваша заявка не отправлена.Ввведите внимательно данные!";
}
?>

</body>
</html>