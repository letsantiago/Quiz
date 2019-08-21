<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 1</title>
	<?php
if (isset($_POST['resp1'])) {
  $_SESSION['resp1'] = $_POST['resp1'];
  header("location:Q2.php");
}
?>
	<style type="text/css">
	    body{
	    	background: #D3D3D3;
	    	background-image: url("https://observatoriodosfamosos.bol.uol.com.br/portal/wp-content/uploads/2019/08/Kylie-Jenner.jpg");
	    }
		h1{
			color: #000000;
			top: 25%;
			font-family: Georgia, serif;
			font-style: oblique;
			font-size: 30px;
		}
		.a{
			background-color: #FA8072;
			width: 350px;
			height: 700px;
			border: 2px;
		}
		h2{
			color: #000000;
			font-family: Times New Roman, sans-serif;
			font-style: oblique;
			font-size: 25px;
		}
		.enter{
			background-color: #FAEBD7;
			color: black;
			width: 325px;
			border-radius: 3px;
		}
		.q{
			font-family: Times New Roman, sans-serif;
            font-style: italic;
            font-size: 10px;
		}
	</style>
</head>
<body>
    <center>
    	<div class="a">
    	<h1>1ªPergunta</h1>
    	<hr>
    	<form method="post">
    		<br><br><br>
    		<h2><b>Quem é o namorado da Kylie Jenner?</b></h2><br><br>
    		<input class="q" type="radio" name="resp1" value="Kendrick Lamar"><b>Kendrick Lamar</b><br><br>
    		<input class="q" type="radio" name="resp1" value="Travis Scott"><b>Travis Scott</b><br><br>
            <input class="q" type="radio" name="resp1" value="Fetty Wap"><b>Fetty Wap</b><br><br>
            <input class="q" type="radio" name="resp1" value="Tupac Shakur"><b>Tupac Shakur</b><br><br><br><br><br><br><br><br>
            <input class="enter" type="submit">
    	</form>
        </div>
    </center>
</body>
</html>