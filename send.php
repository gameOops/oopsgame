<?
$email = $_POST['mail'];
$network = 'localhost';

$user = 'psydemon_artem';

$password = '473eX10';

   $mysqli = mysqli_connect($network, $user, $password, $user) or die('Не удалось подключиться к бд!');
   $result = mysqli_query($mysqli,"SELECT * FROM `keys` LIMIT 1");
   while ($row = $result->fetch_object()) {
	   $id = $row->id;
	   $key = $row->keyd;
   }
    $result2 = mysqli_query($mysqli,"DELETE FROM `keys` WHERE `id` = $id");
	mail();
?>