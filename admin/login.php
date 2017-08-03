<?
session_start();
$login = $_POST['login'];
$password = $_POST['password'];
if ($login == 'admin' AND $password == '2004Ex4002Xe') {
	echo 'OK';
	$_SESSION['logged'] = '1';
} else {
	echo 'NE';
}
?>