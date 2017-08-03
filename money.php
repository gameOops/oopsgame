<?
session_start();
$network = 'localhost';
$id = $_SESSION['logged_id'];
$user = 'psydemon_artem';

$password = '473eX10';

   $mysqli = mysqli_connect($network, $user, $password, $user) or die('Не удалось подключиться к бд!');

	$result = mysqli_query($mysqli, "SELECT * from `users` WHERE `id` = $id");
	while ($row = $result->fetch_object()) {
		$balance = $row->balance;
	}
	if ($balance >= 120) {
		$balance2 = $balance - 120;
		$result = mysqli_query($mysqli, "UPDATE `users` SET `balance` = '$balance2' WHERE `id` = $id");
		echo 'OK';
	} 
?>