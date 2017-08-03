
<?
session_start();
$network = 'localhost';

$user = 'psydemon_artem';

$password = '473eX10';

   $mysqli = mysqli_connect($network, $user, $password, $user) or die('Не удалось подключиться к бд!');
$id = $_SESSION['logged_id'];
			

/*
==========================================
    Страница, на которую будет переведён
    пользователь после успешной оплаты.
    Данная страница не обязательна, вместо
    неё можно переводить пользователя на
    главную страницу сайта, но лучше так.
==========================================
*/

$mrh_pass1 = "473eX10ioPlm"; // пароль #1

// чтение параметров
$out_summ = $_REQUEST["OutSum"]; // по умолчанию (не трогать)
$inv_id = $_REQUEST["InvId"]; // по умолчанию (не трогать)
$shp_item = $_REQUEST["Shp_item"]; // по умолчанию (не трогать)
$crc = $_REQUEST["SignatureValue"]; // по умолчанию (не трогать)

$shp_mulo = $_REQUEST["shp_mulo"]; // если нужно принимаем дополнительный параметр
$shp_names = $_REQUEST["shp_names"]; // если нужно принимаем дополнительный параметр
$shp_phone = $_REQUEST["shp_phone"]; // если нужно принимаем дополнительный параметр

$crc = strtoupper($crc); // переводим ключ в верхний регистр

$my_crc = strtoupper(md5("$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item:shp_mulo=$shp_mulo:shp_names=$shp_names:shp_phone=$shp_phone")); // формируем новый ключ

if ($my_crc != $crc) // проверка корректности подписи
{
  echo "bad sign\n";
 
}

// если всё прошло гладко, то переводим пользователя на любую страницу Вашего сайта,
// например я перевожу на главную и передаю GET параметр order со значением ok
// а на главной странице проверяю, если значение order = ok, то выдаю ему модальное окошко (спасибо за оплату)
echo 'Успех!';
print_r($_POST);
echo $_REQUEST["OutSum"];
$k = $_REQUEST["OutSum"];
$result2 = mysqli_query($mysqli,"SELECT * from `users` WHERE `id` = '$id'");
while ($row2 = $result2->fetch_object()) {
		$balance = $row2->balance;
	}
	$bal2 = $balance + $k;
	echo $bal2;
		$result23 = mysqli_query($mysqli,"UPDATE `users` SET `balance` = '$bal2' WHERE `id` = '$id'");
?>



