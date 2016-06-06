<!DOCTYPE html>
<html>
	<head>
		<title>Naslovna-Košarkaški savez Bosne i Hercegovine</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/logo.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/kontakt.css">
		<script src="skripte/regex.js"></script>
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
	
	<div class="centar">
		<div class="forma">
			<form action="Forma" onsubmit="return(regeks()); method="GET|POST">
				<div id="labela1">
					<label for="E-Mail">E-Mail:</label><br>
					<input type="text" name="E-Mail" id="E-Mail" oninput="boje();" required><br>
				</div>
				<br>
				
				<div id="labela2">
					<label for="ImeiPrezime">Ime i Prezime:</label>
					<input type="text" name="ImeiPrezime" id="ImeIPrezime" oninput="boje();"><br>
				</div>
				<br>
				
				<div id="labela3">
					<label for="BrojTel">Broj Telefona:</label>
					<input type="text" name="BrojTel" id="BrojTel" oninput="boje();"><br>
				</div>	
				<div id="dugme">
					<button type="submit" formaction="index.html"> Submit </button>
				</div>
			
			</form>
		</div>
	
	</div>
	
	</body>
</html>