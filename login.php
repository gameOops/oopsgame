<?
session_start();
$network = 'localhost';

$user = 'psydemon_artem';

$password = '473eX10';

$mysqli = mysqli_connect($network, $user, $password, $user) or die('Не удалось подключиться к бд!');
$name = $_POST['login'];
$desc = $_POST['password'];

$result = mysqli_query($mysqli,"SELECT * from `users` WHERE `login` = '$name'");
while ($row = $result->fetch_object()) {
	$password = $row->password;
	$gff = $row->id;
}
if ($desc == $password) {
echo 'OK';
$_SESSION['logged_id'] = $gff;
} else {
	echo 'sdfsdf';
}
?>