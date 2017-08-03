<!DOCTYPE html>
<html>
<head>
<title>GameOops</title>
<? 
require ('db/db.php'); 
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
	
	</header>
	 <?
			 $id = $_GET['id'];
				$res = mysqli_query($mysqli,"SELECT * FROM `games` WHERE id = $id ") or die('Невозможно найти таблицу !');
					while ($row = $res->fetch_object()) {
						$name = $row->name;
						$img = $row->img;
						$idGame = $row->id;
						$desc = $row->desc;
						?>
		<div class="col-xs-11  col-sm-6 col-md-5 col-lg-5 col-md-offset-1"  style="margin-left:0%;">
	
			 <div class="wrapper">
				 <img class="wrap"src="<? echo $img?>">
				 <img class="wrap"src="<? echo $img?>">
				 <img class="wrap"src="<? echo $img?>">
				 <img class="wrap"src="<? echo $img?>">
			 </div>
		</div>
	
		<div class="col-xs-11  col-sm-5 col-md-5 col-lg-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1"  style="background-image: url(img/f.jpg);  margin-top: 1.3%; background-size: cover;">
			
						<script>
							$('document').ready(function(){
			var h2 = $('.img').height();
			$('.game').css({"height":h2});
		});
						</script>
						
						
							
							<div class="name">
								<p style="color: white;font-size: 20px;"><? echo $name;?></p>
							</div>
							<div class="name">
								<p style="color: white;font-size: 16px;"><? echo $desc;?></p>
							</div>
							<div class="name">
								<a href="<? echo $row->steam;?>"class="login"style="color: black;font-size: 16px;">Купить</a>
							</div>
						
						<?}?>
		</div>
	<div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
		Все игры
	</div>
	<footer>
	</footer>
</div>
</body>
</html>