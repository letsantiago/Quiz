<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Questão 4</title>
			<?php
if (isset($_POST['resp4'])) {
  $_SESSION['resp4'] = $_POST['resp4'];
  header("location:Q5.php");
  if ($_SESSION['r'] == "Jordyn Woods, ex-melhor amiga da Kylie Jenner")
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
	    	background-image: url("https://www.intouchweekly.com/wp-content/uploads/2019/07/Khloe-Kardashian-Posts-Cryptic-Message-Tristan-Thompson-Jordyn-Woods-Scandal-.jpg?crop=0px%2C0px%2C1600px%2C841px&resize=1200%2C630");
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
    	<h1>4ªPergunta</h1>
    	<hr>
    	<form method="post">
    		<br><br><br>
    		<h2><b>Com quem Thristan Thompson traiu Khloe Kardashian?</b></h2><br><br>
    		<input class="q" type="radio" name="resp4" value="Jordyn Woods, ex-melhor amiga da Kylie Jenner"><b>Jordyn Woods, ex-melhor amiga da Kylie Jenner</b><br><br>
    		<input class="q" type="radio" name="resp4" value="Jourdan Dunn, ex-melhor amiga da Kendall Jenner"><b>Jourdan Dunn, ex-melhor amiga da Kendall Jenner</b><br><br>
            <input class="q" type="radio" name="resp4" value="Jessica White, ex-melhor amiga da Kim Kardashian"><b>Jessica White, ex-melhor amiga da Kim Kardashian</b><br><br>
            <input class="q" type="radio" name="resp4" value="Jacquelyn Jablonski, ex-melhor amiga da Kourtney Kardashian"><b>Jacquelyn Jablonski, ex-melhor amiga da Kourtney Kardashian</b><br><br><br><br>
            <input class="enter" type="submit" name="enter">
    	</form>
        </div>
    </center>

</body>
</html>