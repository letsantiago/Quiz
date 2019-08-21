<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 2</title>
	<?php
if (isset($_POST['resp2'])) {
  $_SESSION['resp2'] = $_POST['resp2'];
  header("location:Q3.php");
 }
?>
	<style type="text/css">
	    body{
	    	background: #D3D3D3;
	    	background-image: url("https://static.timesofisrael.com/www/uploads/2019/02/kim-k-from-twitter-e1551205679384.jpg");
	    }
		img{
			display: table;
			width: 1335px;
			height: 624px;
			position: absolute;
			padding: 0;
			margin: 0;
			opacity: 0.3;
		}
		h1{
			top: 25%;
			font-family: Georgia, serif;
			font-style: oblique;
			font-size: 30px;
		}
		.a{
			background-color: #FA8072;
			width: 350px;
			height: 624px;
			border: 2px;
		} 
		h2{
			color: #000000;
			font-family: Times New Roman, sans-serif;
			font-style: oblique;
			font-size: 25px;
		}
		.q{
			font-family: Times New Roman, sans-serif;
            font-style: italic;
            font-size: 10px;
		}
		.enter{
			background-color: #FAEBD7;
			color: #000000;
			width: 325px;
			border-radius: 3px;
		}
	</style>
</head>
<body>
    <center>
    	<div class="a">
    	<h1>2ªPergunta</h1>
    	<hr>
    	<form method="post">
    		<br><br><br>
    		<h2><b>Quais os nomes dos filhos da Kim Kardashian?</b></h2><br><br>
    		<input class="q" type="radio" name="resp2" value="Bruce, Ashley, Dimmy e Hilary"><b>Bruce, Ashley, Dimmy e Hilary</b><br><br>
    		<input class="q" type="radio" name="resp2" value="Franklin, Renesmée, Dener e Trinity"><b>Franklin, Renesmée, Dener e Trinity</b><br><br>
            <input class="q" type="radio" name="resp2" value="Saint, Psalm, North e Chicago"><b>Saint, Psalm, North e Chicago</b><br><br>
            <input class="q" type="radio" name="resp2" value="Cameron, Sophie, Noah e Jennifer"><b>Cameron, Sophie, Noah e Jennifer</b><br><br><br><br><br>
            <input class="enter" type="submit" name="enter">
    	</form>
        </div>
    </center>

</body>
</html>