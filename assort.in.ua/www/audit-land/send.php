<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
   <title>Ваше сообщение успешно отправлено</title>
</head>

<body>
<?php


$sait = "<p><a href=\"../../audit-land/index.html\">Вернуться на главную</a></p>";
$name = @ trim ($_POST['name']);
$lastname = @ trim ($_POST['lastname']);
$email = @ trim ($_POST['email']);
$mobile = @ trim ($_POST['mobile']);

/*проверка, переданы ли все данные*/
if (!empty ($_POST['name']) and !empty ($_POST['lastname']) and !empty ($_POST['email']) and !empty( $_POST['mobile'])) {
	$name = @ trim ($_POST['name']);
	$email = @ trim ($_POST['lastname']);
	$tel = @ trim ($_POST['email']);
	$message = @ trim ($_POST['mobile']);
	# отправка данных на мыло админу
	mail("creative.mashine@gmail.com",
	 "Сообщение с сайта отправитель: С главной",
  	"Имя заказчика: $name \n
   	Email заказчика: $lastname \n
   	телефон заказчика: $email \n
   	Сообщение: $mobile");
	/**вывод резалта что отправлено данные**/
	echo "Сообщение отправлено! В ближайшее время мы свяжемся с Вами<br/> $sait";
	exit;
}else {
	echo "Ваша заявка не отправлена.Ввведите внимательно данные!";
}
?>

</body>
</html>