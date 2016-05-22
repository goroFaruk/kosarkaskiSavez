<!DOCTYPE html>
<html>
	<head>
		<title>Naslovna-Košarkaški savez Bosne i Hercegovine</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/logo.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/ekst_linkovi.css">

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
	<div id="centar">
	<div class="Linkovi">
		<ul> 
			<li><a href="http://www.nba.com/" target=_blank>NBA</a></li>
			<li><a href="http://dleague.nba.com/?ls=iref%3Anba%3Agnav" target=_blank>NBA D-League</a></li>
			<li><a href="http://www.ncaa.com/" target=_blank>NCAA</a></li>
			<li><a href="http://www.wnba.com/?ls=iref:nba:gnaz" target=_blank>WNBA</a></li>
			<li><a href="http://www.aba-liga.com/" target=_blank>ABA League</a></li>
		</ul>		
	</div>
	</body>
</html>