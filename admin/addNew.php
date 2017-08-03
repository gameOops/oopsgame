<?
$network = 'localhost';

$user = 'psydemon_artem';

$password = '473eX10';

$mysqli = mysqli_connect($network, $user, $password, $user) or die('Не удалось подключиться к бд!');
$name = $_POST['name'];
$desc = $_POST['desc'];
$cat = $_POST['cat'];
$price = $_POST['price'];
$steam = $_POST['steam'];

$result = mysqli_query($mysqli,"INSERT INTO `games`(`name`, `img`, `desc`, `steam`, `cat`) VALUES ('".$name."','".$price."','".$desc."','".$steam."','".$cat."')");
?>