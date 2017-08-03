<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?
if ($_SESSION['logged'] == '1') {
?>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OopsGame Admin</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<!--<link rel="stylesheet" href="css/fluid.css" type="text/css" media="screen" charset="utf-8" />-->
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
	</head>
	<body style="background-color:#f1f1f1;">
	<h1 id="head">Админка OopsGame</h1>
	<ul id="navigation">
			<li><span class="active">Добавить игру</span></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Users</a></li>
		</ul>
			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>Добавить игру</h2>
					
				</div>

				<div class="grid_5">
					<p>
						<label for="title">Название <small>Название игры.</small></label>
						<input id="name"  type="text" name="title" />
					</p>
				</div>

				<div class="grid_5">
					<p>
						<label   for="title">Описание <small>Описание игры</small></label>
						<input id="desc"type="text" name="title" />
					</p>
						
				</div>
				<div class="grid_6">
					<p>
						<label  for="title">Category</label>
						<select id="cat">
							<option>Экшн</option>
							<option>Симулятор</option>
							<option>Стратегия</option>
						</select>
					</p>
				</div>

				<div class="grid_16">
					<p>
						<label>Картинка <small>Картинка игры из СТИМ!</small></label>
						<textarea id="price" ></textarea>
					</p>
				</div>

				<div class="grid_16">
					<p>
						<label>Стим<small>Ссылка на страницу игры в стиме.</small></label>
						<textarea id="steam" class="big"></textarea>
					</p>
					<p class="submit">
						
						<input onclick="add()"type="submit" value="Добавить" />
					</p>
				</div>
			</div>
		
	<script>
		function add() {
			var name = $('#name').val();
			var desc = $('#desc').val();
			var cat = $('#cat').val();
			var price = $('#price').val();
			var steam = $('#steam').val();
			$.ajax({
                url: 'addNew.php',
                type: 'post',
                timeout: 10000, 
                data: {'name': name, 'desc': desc, 'cat': cat, 'price': price, 'steam': steam},
                success: function(data) {
					
						$('#name').val(' ');
						$('#desc').val(' ');
						$('#cat').val(' ');
						$('#price').val(' ');
						$('#steam').val(' ');
					
                },
                error: function() {
                 
                }
            });	
		}
	</script>
	</body>
<? } else { 
echo 'Брат братан братишка, куда ты полез ? Шел бы ты отсюда :)';
}?>
</html>