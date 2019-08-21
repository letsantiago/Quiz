<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		}
		.background{
		position: absolute;
		width: 800px;
		height: 850px;
		background: #000;
		opacity: 0.3;
		}
		.login{
			width: 280px;
			position: absolute;
			top: 15%;
			left: 38%;
		}
		.object{
			position: absolute;
			transition: all 2s ease-in;
			-webkit-transition: all 2s ease-in;
		}
		#animation:hover .rotate360cw{
			transform: rotate(360deg);
			-webkit- transform: rotate(360deg);
		}
		.login h1{
			float: left;
			font-size: 50px;
			border-bottom: 6px solid #FA8072;
			margin-bottom: 40px;
			padding: 13px 0 
		}
		.login1{
			width: 500px;
			top: 65%;
			overflow: hidden;
			font-size: 200px;
			padding: 8px 0;
			position: relative;
			margin: 8px 0;
			border-bottom: 2px solid #FA8072; 
		}
		.login1 input{
			border-radius: 5px;	
		}
		.botao input[type = "submit"]{
			border: 0;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 4px solid #FA8072;
			padding: 14px 40px;
			outline: none;
			color: black;
			border-radius: 24px;
			transition: 0.25s;
			cursor: pointer;
		}
		.botao input[type = "submit"]:hover {
			background: #FA8072;
		}

	</style>
</head>
<body>
	<form method="post">
	<div class="botao">
		<input type="submit" value="INICIAR">
	</div>
	<div class="background">
	<img src="https://vignette.wikia.nocookie.net/nickiminaj/images/a/a5/Kardashianjenner.jpg/revision/latest?cb=20181209054422" style="height: 850px;">
	</div>
	<div class="animation" id="animation">
		<img class=" object logo rotate360cw" src="https://upload.wikimedia.org/wikipedia/commons/9/95/E%21_Logo.png" style="height: 180px; width: 180px;">
	</div>
	<div class="login">
	<h1>KARDASHIAN TEST - LOGIN</h1>
	</div>
	<br>
	<br>
	<br>
	<br>
	<center>
	<div class="login1">
	<input type="text" name="login" placeholder="Usuário" style="width: 200px; height: 30px; top: 65%;">
	</div>
	<br>
	<br>
	<H3>♥ ESCOLHA SEU AVATAR ♥</H3>
	<div class="avatares">
	<label><input type="radio" value="<img src='https://d3g9pb5nvr3u7.cloudfront.net/authors/59a44ade3c2e5134237ee2fb/-1435294384/256.jpg>' style='width:180px;'" name="avatar"><img src="https://d3g9pb5nvr3u7.cloudfront.net/authors/59a44ade3c2e5134237ee2fb/-1435294384/256.jpg" style="width:130px; opacity: 0.9; border: 4px solid #FA8072;"></label>
	<label><input type="radio" value="<img src='https://cdn140.picsart.com/275444411017201.png?c256x256' style='width:180px;'>" name="avatar"><img src="https://cdn140.picsart.com/275444411017201.png?c256x256" style="width: 130px; opacity: 0.9; border: 4px solid #FA8072; "></label>
	<label><input type="radio" value="<img src='https://i2.wp.com/tellmemore.media/wp-content/uploads/2018/07/kylie-jenner-wordt-hoogstwaarschijnlijk-jongste-miljardair-ooit.jpg?fit=256%2C256&ssl=1>' style='width:130px;'" name="avatar"><img src="https://i2.wp.com/tellmemore.media/wp-content/uploads/2018/07/kylie-jenner-wordt-hoogstwaarschijnlijk-jongste-miljardair-ooit.jpg?fit=256%2C256&ssl=1" style="width: 130px; opacity: 0.9; border: 4px solid #FA8072;"></label>
	<br>
	</div>
	</center>
	</form>
	<?php
	if (isset($_POST['login'])){
		$_SESSION['login'] = $_POST['login'];
	
	if(isset($_POST['avatar'])){
		$_SESSION['avatar'] = $_POST['avatar'];
		header("location:Q1.php");
	}
}
	?>
</body>
</html>
