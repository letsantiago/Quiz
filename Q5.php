<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 5</title>
	<?php
if (isset($_POST['resp5'])) {
  $_SESSION['resp5'] = $_POST['resp5'];
  header("location:resultado.php");
  if ($_SESSION['R'] == "Pois Bruce se assumiu transgênero e tornou se Caitlyn Jenner")
  {
    $_SESSION['Score'] += 1;
  }
  else
  {
    $_SESSION['Error'] += 1;
  }
}
?>
	<style type="text/css">
	    body{
	    	background: #D3D3D3;
	    	background-image: url("https://nyppagesix.files.wordpress.com/2018/11/kris-jenner.jpg?quality=90&strip=all");
	    }
		h1{
			top: 25%;
			font-family: Snell Roundhand, cursive;
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
			background-color:  #FAEBD7;
			color: #000000;
			width: 325px;
			border-radius: 3px; 
		}
	</style>
</head>
<body>
    <center>
    	<div class="a">
    	<h1>5ªPergunta</h1>
    	<hr>
    	<form method="post">
    		<h2><b>Por que Kris e Bruce Jenner se separaram?</b></h2><br><br>
    		<input class="q" type="radio" name="resp5" value="Pois eles brigavam muito"><b>Pois eles brigavam muito</b><br><br>
    		<input class="q" type="radio" name="resp5" value="Pois Kris não amava mais Bruce"><b>Pois Kris não amava mais Bruce</b><br><br>
            <input class="q" type="radio" name="resp5" value="Pois Bruce se assumiu transgênero e tornou se Caitlyn Jenner"><b>Pois Bruce se assumiu transgênero e tornou se Caitlyn Jenner</b><br><br>
            <input class="q" type="radio" name="resp5" value="Pois não havia mais amor de ambas as partes"><b>Pois não havia mais amor de ambas as partes</b><br><br><br><br>
            <input class="enter" type="submit" name="enter">
    	</form>
        </div>
    </center>

</body>
</html>