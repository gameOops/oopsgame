<?
session_start();
?>
<html>

<head>

<title>OopsGame</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href="style.css" rel="stylesheet">

</head>

<body class="login login-action-login wp-core-ui  locale-ru-ru">
		<div id="login">
		
	
<form name="loginform" id="loginform">
	<p>
		<label for="user_login">Имя пользователя или e-mail<br>
		<input type="text" name="log" id="user_login" class="input" value="" size="20"></label>
	</p>
	<p>
		<label for="user_pass">Пароль<br>
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20"></label>
	</p>
		
	<p class="submit">
		<a type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Войти">Войти</a>
		
		<input type="hidden" name="testcookie" value="1">
	</p>
</form>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="https://artemka.tw1.ru/">← Назад к сайту «OopsGame»</a></p>
	
	</div>

	<script>
		$('.submit').click(function() {
        var login = $('#user_login').val();
        var password = $('#user_pass').val(); // сообщение
            $.ajax({
                url: 'login.php',
                type: 'post',
                timeout: 10000, 
                data: {'login': login, 'password': password},
                success: function(data) {
					if (data == 'OK') {
						window.location.href = "http://artemka.tw1.ru/admin/add.php";
					} else {
						alert ('Логин и пароль указан не верно!');
					}
                },
                error: function() {
                 
                }
            });		

		});
	</script>
		<div class="clear"></div>
	
	
	<script charset="UTF-8" type="text/javascript">vkdId ='gmakpjahbdpafpgbnnlhbgnjacdniaeb';</script><script charset="UTF-8" type="text/javascript">extensionsURL = 'chrome-extension://gmakpjahbdpafpgbnnlhbgnjacdniaeb/';</script><script charset="UTF-8" type="text/javascript">vkd_settings =JSON.parse('{"showBitrate":"showHover","landCode":"ru"}')</script><script charset="UTF-8" type="text/javascript" src="chrome-extension://gmakpjahbdpafpgbnnlhbgnjacdniaeb/assets/js/in_vk.js"></script></body>
</html>