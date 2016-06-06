<!DOCTYPE html>
<html>
	<head>
		<title>Naslovna-Košarkaški savez Bosne i Hercegovine</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/logo.css">
		<link rel="stylesheet" href="css/style.css">
		<script src ="skripte/novosti.js"> </script>
		<script src ="skripte/filtriranje.js"> </script>
	</head>
	<body>
	<div id="logo">
		<div id="K">
		<p>K</p>
		</div>
		<div id="tekst1">
			<p>ošarkaški savez</p>
		</div>
		<div id="tekst2">
			<p>Bosne i Hercegovine</p>
		</div>	
	</div>
	
	<div class="Menu">
	<?php
	session_start();
	if(isset($_SESSION['sesija']))
	{
		print "<ul>
			<li><a href='index.php'>Početna</a></li>
			<li><a href='liga.php'>Liga</a></li>
			<li><a href='kontakt.php'>Kontakt</a></li>
			<li><a href='ekst_linkovi.php'>Eksterni Linkovi</a></li>
			<li><a href='login.php'>LogOut</a></li>
			<li><a href='dodavanjeNovosti.php'>Dodavanje Novosti</a></li>
		</ul>";
	}else 
	{
		print "<ul>
			<li><a href='index.php'>Početna</a></li>
			<li><a href='liga.php'>Liga</a></li>
			<li><a href='kontakt.php'>Kontakt</a></li>
			<li><a href='ekst_linkovi.php'>Eksterni Linkovi</a></li>
			<li><a href='login.php'>LogIn</a></li>
		</ul>";
		
	}
	?>
	</div>
	
	<div id="sredina">
	<form id='srcforma' action='index.php' method='POST'>
	<div id="dugmad">
	<button type="submit" action="index.php" name="dugme1"> Sortiraj po datumu </button>
	</div>
	<div i="dugmad1">
	<button type="submit" action="index.php" name="dugme2"> Sortiraj po abecedi </button>
	</form>
	</id>
	<div class="centar">
	
		<div class="Vijesti1">
			<ul>
		<?php
						$veza = new PDO("mysql:dbname=wtspirala4;host=127.1.253.130:3306;charset=utf8", "adminEEEVaRr", "p7-K61F1FTzz");
						$veza->exec("set names utf8");
						$kvery = $veza->query("select naslov, slika, tekst, vrijeme from novost");
						if(!$kvery){
							echo 'greska';
							echo $veza->errorInfo()[2];
							}
						if(isset($_POST['sortiraj']))
						{
							$kvery = $veza->query("select naslov, slika, tekst, vrijeme from novost ORDER BY naslov ASC");
							foreach($kvery as $podatak) 
							{
								print "<li class='vijesti'>
							<h4>".$podatak['naslov']."</h4>
									<img src='".$podatak['slika']."' alt='".$podatak['slika']."'>
									<p>Objavljeno <time class='datumiObjave' datetime='".$podatak['vrijeme']."+02:00'></time>.</p>
		<p>
		".$podatak['tekst']." 
		</p>
		
		</li>";	
								
							}
						}
 						elseif(isset($_POST['sortirajDate']))
						{
							$kvery = $veza->query("select naslov, slika, tekst, vrijeme from novost ORDER BY vrijeme DESC");
							foreach($kvery as $podatak) 
							{
								print "<li class='vijesti'>
							<h4>".$podatak['naslov']."</h4>
									<img src='".$podatak['slika']."' alt='".$podatak['slika']."'>
									<p>Objavljeno <time class='datumiObjave' datetime='".$podatak['vrijeme']."+02:00'></time>.</p>
		<p>
		".$podatak['tekst']." 
		</p>
		
		</li>";	
 							}
 						}
						else
						{
							foreach($kvery as $podatak) 
							{
								print "<li class='vijesti'>
							<h4>".$podatak['naslov']."</h4>
									<img src='".$podatak['slika']."' alt='".$podatak['slika']."'>
									<p>Objavljeno <time class='datumiObjave' datetime='".$podatak['vrijeme']."+02:00'></time>.</p>
		<p>
		".$podatak['tekst']." 
		</p>
		
		</li>";	
							}
						}
							
								
		?>
						
	
		</ul>
		
		</div>
	<div class="formaZaOdabiranjeNovosti">
		<form action = "Forma">
			<fieldset>
				<legend>Odaberi novosti po vremenu objave </legend>
					<input type="radio" name="novosti" id="danas" value="danasnjeNovosti" onchange="filtriraj()"> Današnje Novosti<br>
					<input type="radio" name="novosti" id="sedmica" value="novostiOveSedmice" onchange="filtriraj()"> Novosti ove sedmice<br>
					<input type="radio" name="novosti" id="mjesec" value="novostiOvogMjeseca" onchange="filtriraj()"> Novosti ovog mjeseca<br>
					<input type="radio" name="novosti" id="sve" value="sveNovosti" onchange="filtriraj()"> Sve novosti<br>
			</fieldset>
		</form>
	</div>
	</body>
</html>