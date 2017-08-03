<?
session_start();
$network = 'localhost';

$user = 'psydemon_artem';

$password = '473eX10';

   $mysqli = mysqli_connect($network, $user, $password, $user) or die('Не удалось подключиться к бд!');
$id = $_SESSION['logged_id'];
			$result2 = mysqli_query($mysqli,"SELECT * from `users` WHERE `id` = '$id'");
while ($row2 = $result2->fetch_object()) {
		$balance = $row2->balance;
	}
		 echo json_encode($balance);

?>