<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RESULTADO</title>
</head>
<body>
	<center>
		<legend>
			<h1>YASSSSS, GIRLLLLL!!!! Você concluiu nosso quiz, corre pra postar seu resultado no Instagram, sister ♥</h1>
		</legend>
	</center>
	<?php
		echo "<br>";
		echo "<br>";
		echo "Oi ♥, tudo bem"; 
		echo "  ";
		echo $_SESSION['login'];
		echo "?";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo $_SESSION['avatar'];
		echo "<br>";
		echo "<br>";
		echo "<br>";
        
        $r1='Travis Scott';
        $r2='Saint, Psalm, North e Chicago';
        $r3='Gigi Hadid';
        $r4='Jordyn Woods, ex-melhor amiga da Kylie Jenner';
        $r5='Pois Bruce se assumiu transgênero e tornou se Caitlyn Jenner';
       
		$certo=0;
		$errado=0;

		if ($_SESSION['resp1'] == $r1) {
		$certo++;}
		else{
		$errado++;}

		if ($_SESSION['resp2'] == $r2) {
		$certo++;}
		else{
		$errado++;}

		if ($_SESSION['resp3'] == $r3) {
		$certo++;}
		else{
		$errado++;}

		if ($_SESSION['resp4'] == $r4) {
		$certo++;}
		else{
		$errado++;}

		if ($_SESSION['resp5'] == $r5) {
		$certo++;}
		else{
		$errado++;}

	?>
	<div class="cont">
        <table border=1 style="text-align:center;width:300px">
           <thead>
		  <th>Pergunta</th>
		  <th>Sua Resposta</th>
		  <th>Resposta Certa</th>
		</thead>
		<tbody>
		 <tr>
		  <td>1)</td>
		  <td><?php echo $_SESSION['resp1']; ?></td>
		  <td> B) </td>
		 </tr>
		 <tr>
		  <td> 2)</td>
		  <td><?php echo $_SESSION['resp2']; ?></td>
		  <td> C) </td>
		 </tr>
		 <tr>
		  <td>3)</td>
		  <td><?php echo $_SESSION['resp3']; ?></td>
		  <td> D) </td>
		 </tr>
		 <tr>
		  <td>4)</td>
		  <td><?php echo $_SESSION['resp4']; ?></td>
		  <td> A) </td>
		 </tr>
		 <tr>
		  <td>5)</td>
		  <td><?php echo $_SESSION['resp5']; ?></td>
		  <td> C) </td>
		 </tr>
		</tbody>
        </table>  
    </div>
    <br>
<br>
<br>
	<div class="container">
 		<table border=1 style="text-align:center;width:300px">
            <thead>
                <tr>
                    <th>Pontuação </th>
                    <th> Acertos </th>
                    <th> Erros </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <?php	if ($certo <= 2){echo " Poxa, mana. Não merece nem andar no jatinho Kardashian. :( ";}
						elseif ($certo == 3){echo " Quem sabe eu te chame para o Thanksgiving. =/ ";}
						elseif ($certo == 4){echo " Com esse conhecimento, te levaria pro Coachella. :D ";}
						else{echo " Parabéns, você é uma Kardashian Perdida mô ♥.♥ ";} ?></td>
                    <td><?php echo " $certo "; ?></td>
                    <td><?php echo " $errado "; ?></td>
                </tr>
            </tbody>
        </table>  
    </div>   
</body>
</html>
</body>
</html>
<style type="text/css">
	body{
		background-image: url(https://data.whicdn.com/images/179756085/original.gif);
		background-repeat: no-repeat;
		background-size: 100%;
		color: white;
		width: 1455px;
	}
</style>