<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>GameOops</title>
<? 
require ('db/db.php'); 
$name = $_SESSION['logged_id'];
$result = mysqli_query($mysqli,"SELECT * from `users` WHERE `id` = '$name'");
while ($row = $result->fetch_object()) {
	$img2 = $row->img;
	$name2 = $row->login;
	
}
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="scripts/jquery.cycle.all.min.js" type="text/javascript"></script>

</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<div class="container" style="padding:0; width:100%;">
	<script src="js/displayResize.js"></script>
	
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('.slideshow').cycle({
fx: 'fade'
});
});
</script>
	<header>
		<div class="col-xs-2  col-sm-2 col-md-2 col-lg-2 col-md-offset-1"  style="margin-left:0%;">
			<img style="width: 90px;margin-top: 5px;"src="img/logo.png">
		</div>
		<? if (empty($_SESSION['logged_id'])) {?>
		<div class="auth">
			<a onclick="setSticker()"class="login">Войти</a>
		</div>
		<? } else {?>
		<div class="auth">
		<span class="bal"></span>
			<script>
		function lolks(){
  	$.ajax({
                url: 'MoneyUpdate.php',
                type: 'post',
                timeout: 10000, 
                success: function(data) {
					data = jQuery.parseJSON(data);
					$('.bal').append('На вашем балансе:'+ data);
                },
                error: function() {
                 
                }
            });	
}
lolks();
			</script><a onclick="exit()"class="login">Выйти</a>
		</div>
		<?}?>
	</header>
	<script>
					function setSticker() {
					
						 var darkLayer = document.createElement('div'); 
                darkLayer.id = 'shadow'; 
                document.body.appendChild(darkLayer); 
 
                var modalWin = document.getElementById('popupWin'); 
                modalWin.style.display = 'block'; 
				var dakr = document.getElementById('shadow');
                dakr.onclick = function () {  
				
                    darkLayer.parentNode.removeChild(darkLayer); 
                    modalWin.style.display = 'none'; 
					location.reload();
                    return false;
                };
					}
					
			
			</script>
	<div style="text-align: center;background-color: #333;" id="popupWin" class="modalwin">
						<div style="background-color: #333;width: 106.23%;text-align:center;height: 47px;overflow: hidden;margin-left: -3%;margin-top: -3.2%;">
						<h2 style="font-size:12px;margin-top:0.8%; color:white;">Не зарегестрированы?</h2>
						</div>
						
					
							<input style="width:75%;margin-bottom: 4%;height: 40px;border-radius: 5px;" name="login" id="message" placeholder="Логин">
    <input style="width:75%;height: 40px;border-radius: 5px;" type="password" name="password" id="message2" placeholder="Пароль"><br>
							<button name="send_message" id="btn1" onclick="send()" style-="margin-top:1%;" style="
    margin-top: 5%;
    background-color: gray;
    width: 35%;
    height: 40px;
    border-radius: 15px;
">Войти</button>
							
						<script>
							function send() {
								var login = $('#message').val();
								var password = $('#message2').val();
								
								$.ajax({
                url: 'login.php',
                type: 'post',
                timeout: 10000, 
                data: {'login': login, 'password': password},
                success: function(data) {
					if (data == 'OK') {
					location.reload();
					}
                },
                error: function() {
                 
                }
            });	
							}
						</script>
					   
						
					</div>
		<div class="col-xs-11  col-sm-6 col-md-5 col-lg-5 col-md-offset-1"  style="margin-left:0%;">
	
			 <div class="wrapper">
				 <img class="wrap"src="images/img1.jpg">
				 <img class="wrap"src="images/img2.jpg">
				 <img class="wrap"src="images/img3.jpg">
				 <img class="wrap"src="images/img4.jpg"> 
			 </div>
		</div>
	
		<div class="col-xs-12  col-sm-5 col-md-5 col-lg-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1"  style="background-image: url(img/f.jpg);  margin-top: 1.3%; background-size: cover;">
			 <?
				$res = mysqli_query($mysqli,"SELECT * FROM `games` ORDER by RAND() LIMIT 4") or die('Невозможно найти таблицу !');
					while ($row = $res->fetch_object()) {
						$name = $row->name;
						$img = $row->img;
						$idGame = $row->id;
						?>
						<script>
							$('document').ready(function(){
			var h2 = $('.img').height();
			$('.game').css({"height":h2});
		});
						</script>
						
						<a href="game.php?id=<? echo $idGame;?>"><div class="game" style="margin-top:20px;    height: 65px;">
							<div class="img" style="float:left;">
								<img style="width:120px;"src="<? echo $img;?>">
							</div>
							<div class="name">
								<p style="color: white;font-size: 16;"><? echo $name;?></p>
							</div>
						</div></a>
						
						<?}?>
		</div>
	<div class="col-xs-12  col-sm-12 col-md-12 col-lg-12" style=" background-color: rgb(77, 74, 70);margin-top:20px;">
	
		 <?
				$res = mysqli_query($mysqli,"SELECT * FROM `games` ") or die('Невозможно найти таблицу !');
					while ($row = $res->fetch_object()) {
						$name = $row->name;
						$img = $row->img;
						$idGame = $row->id;
						?>
						<script>
							$('document').ready(function(){
			var h2 = $('.img').height();
			$('.game').css({"height":h2});
		});
						</script>
						
						<a href="game.php?id=<? echo $idGame;?>"><div class="game" style="margin-top:20px;    height: 65px;">
							<div class="img" style="float:left;">
								<img style="width:120px;"src="<? echo $img;?>">
							</div>
							<div class="name">
								<p style="color: white;font-size: 16;"><? echo $name;?></p>
							</div>
						</div></a>
						
						<?}?>
	</div>
	<div class="col-xs-12  col-sm-12 col-md-12 col-lg-12" style=" background-color: rgb(77, 74, 70);margin-top:20px;">
	<center><p id="Luck"style="    color: white;color: white;-webkit-background-clip: text;-moz-background-clip: text;background-clip: text;font-family: Impact;font-size: 27px;">Испытай удачу !</p></center>
		<center><div class="random" ><div class="line" style="
    position: absolute;
    background-color: #d39c2c;
    width: 2px;
    height: 32%;
    text-align: center;
    margin-left: 14%;
"></div><div id="car">
		 <?
		 for ($i = 0; $i <=39; $i++) {
			$gg = rand(1,5);
			$res = mysqli_query($mysqli,"SELECT * FROM `CaseDrop` WHERE `id` = '$gg' ") or die('Невозможно найти таблицу !');
					while ($row = $res->fetch_object()) {
						$name2 = $row->name;
						$img2 = $row->img;
						$idGame2 = $row->id;
									
						?>
						
			<div class="img_<? echo $i;?>" style="float:left;">
								<img style="width:160px;border:5px solid black;"src="<? echo $img2;?>">
							</div>
							
						
						
						<?}
		 }
		
		 
		 
		 ?></div>
		 </div>
		 <div class="OpenClose"></div>
		 <a id="Open"class="button7">Открыть 120 РУБ</a></br>
		 <script>
		 $('#Open').click(function(){
			 
			 lolks();
			 $('.bal').empty();
		 });
		 </script>
		 <small>Вы можете выйграть:</small>
		 <div class="error"></div>
		 <script src="js/main.js">
		
		 </script>
		 <div style="text-align: center;background-color: #333;" id="popupWin1" class="modalwin">
						<div style="background-color: #333;width: 106.23%;text-align:center;height: 47px;overflow: hidden;margin-left: -3%;margin-top: -3.2%;">
						<h2 style="font-size:12px;margin-top:0.8%; color:white;">Поздравляем!</h2>
						</div>
						
			<div class="sad">
			<img style="width:160px;border:5px solid black;"src="https://steamplay.ru/uploads/1676922.jpg">
				<p style="color: white;">Ваш выйгрышь:Random Steam Key!</p>
				<small>Выйгрышь придет на email который вы указали ниже!</small></br>

			<input type="text" style="margin-bottom: 4%;"id="email" placeholder="Ваш email адрес"></br>
				<a onclick="sendGift();" id="sendGift" class="button7">Забрать приз!</a>
			</div>
			<script>
$('#sendGift').click(function(){
	var game = '1';
	var mail = $('#email').val();
	 $.ajax({
                url: 'send.php',
                type: 'post',
                timeout: 10000, 
                data: {'game': game,'mail': mail},
                success: function(data) {
					    var modalWin = document.getElementById('popupWin1'); 
					    modalWin.style.display = 'none'; 
						$('#shadow').remove()
						alert ('Ключ отправлен вам на почту!');
                },
                error: function() {
						var modalWin = document.getElementById('popupWin1'); 
					    modalWin.style.display = 'none'; 
						$('#shadow').remove()
alert ('Игра не была отправлена !')						
                }
            });		
});

</script>
					</div>
					 <div style="text-align: center;background-color: #333;" id="popupWin2" class="modalwin">
						<div style="background-color: #333;width: 106.23%;text-align:center;height: 47px;overflow: hidden;margin-left: -3%;margin-top: -3.2%;">
						<h2 style="font-size:12px;margin-top:0.8%; color:white;">Поздравляем!</h2>
						</div>

			<div class="sad">
			<img style="width:160px;border:5px solid black;"src="http://cdn.edgecast.steamstatic.com/steam/apps/12120/header.jpg?t=1478119560">
			<p style="color: white;">Ваш выйгрышь:GTA SA!</p>
			<small>Выйгрышь придет на email который вы указали ниже!</small></br>
			
			<input type="text" style="margin-bottom: 4%;"id="email" placeholder="Ваш email адрес"></br>
			<a onclick="sendGift();" id="sendGift" class="button7">Забрать приз!</a>
			</div>
					</div>
					 <div style="text-align: center;background-color: #333;" id="popupWin3" class="modalwin">
						<div style="background-color: #333;width: 106.23%;text-align:center;height: 47px;overflow: hidden;margin-left: -3%;margin-top: -3.2%;">
						<h2 style="font-size:12px;margin-top:0.8%; color:white;">Поздравляем!</h2>
						</div>

			<div class="sad">
			<img style="width:160px;border:5px solid black;"src="http://cdn.edgecast.steamstatic.com/steam/apps/4000/header.jpg?t=1497714104">
			<p style="color: white;">Ваш выйгрышь:Garrys Mod!</p>
			<small>Выйгрышь придет на email который вы указали ниже!</small></br>
			
			<input type="text" style="margin-bottom: 4%;"id="email" placeholder="Ваш email адрес"></br>
			<a onclick="sendGift();" id="sendGift" class="button7">Забрать приз!</a>
			</div>
					</div>
					 <div style="text-align: center;background-color: #333;" id="popupWin4" class="modalwin">
						<div style="background-color: #333;width: 106.23%;text-align:center;height: 47px;overflow: hidden;margin-left: -3%;margin-top: -3.2%;">
						<h2 style="font-size:12px;margin-top:0.8%; color:white;">Поздравляем!</h2>
						</div>

			<div class="sad">
			<img style="width:160px;border:5px solid black;"src="http://cdn.edgecast.steamstatic.com/steam/apps/578080/header.jpg?t=1499474448">
			<p style="color: white;">Ваш выйгрышь:BattleGround!</p>
			<small>Выйгрышь придет на email который вы указали ниже!</small></br>
			
			<input type="text" style="margin-bottom: 4%;"id="email" placeholder="Ваш email адрес"></br>
			<a onclick="sendGift();" id="sendGift" class="button7">Забрать приз!</a>
			</div>
					</div>
		 <div class="drop">
		 <?
		 	$res = mysqli_query($mysqli,"SELECT * FROM `CaseDrop`") or die('Невозможно найти таблицу !');
					while ($row = $res->fetch_object()) {
						$name2 = $row->name;
						$img2 = $row->img;
						$idGame2 = $row->id;
									
						?>
						
			<div class="img" style="float:left;margin-left: 2%;    margin-top: 1%;">
								<img style="width:120px;"src="<? echo $img2;?>">
							</div>
							
						
						
						<?} ?>
		
		 </div>
		 
		 
		 </center>
		
	</div>
	</div>
	<footer>
	<a href="//www.free-kassa.ru/"><img src="//www.free-kassa.ru/img/fk_btn/14.png"></a>
	</footer>
</div>
</body>
</html>