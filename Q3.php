<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 3</title>
		<?php
if (isset($_POST['resp3'])) {
  $_SESSION['resp3'] = $_POST['resp3'];
  header("location:Q4.php");
  if ($_SESSION['re'] == "Gigi Hadid")
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
	    	background-image: url("https://www.sheknows.com/wp-content/uploads/2018/08/mocufsybwlfzkau7z6km.jpeg");
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
			height: 624px;
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
			color: #000000;
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
    	<h1>3ªPergunta</h1>
    	<hr>
    	<form method="post">
    		<br><br><br>
    		<h2><b>Quem é a melhor amiga da Kendall Jenner?</b></h2><br><br>
    		<input class="q" type="radio" name="resp3" value="Stella Maxwell"><b>Stella Maxwell</b><br><br>
    		<input class="q" type="radio" name="resp3" value="Taylor Hill"><b>Taylor Hill</b><br><br>
            <input class="q" type="radio" name="resp3" value="Elsa Hosk"><b>Elsa Hosk</b><br><br>
            <input class="q" type="radio" name="resp3" value="Gigi Hadid"><b>Gigi Hadid</b><br><br><br><br><br>
            <input class="enter" type="submit" name="enter">
    	</form>
        </div>
    </center>

</body>
</html>