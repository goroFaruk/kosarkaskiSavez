<!DOCTYPE html>
<html>
	<head>
		<title>Naslovna-Košarkaški savez Bosne i Hercegovine</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/logo.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/liga.css">

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
	<div id="tabela">
	<table>
	  <tr>
		<th>
			<p> Pozicija
			</p>
		</th>
		<th>
			<p> Ekipa
			</p>
		</th>
		<th>
			<p>
			Odigranih utakmica
			</p>
		</th>
		<th>
			<p> 
			Pobjeda/Poraza
			</p>
		</th>
		<th>
			<p>
			Koš razlika
			</p>
		</th>
		<th>
			<p>
			Broj bodova
			</p>
		</th>
	  </tr>
		  <td><p>1.</p></td>
		  <td><p>KK Igokea</p></td>
		  <td><p>3</p></td>
		  <td><p>3/0</p></td>
		  <td><p>75</p></td>
		  <td><p>6</p></td>
		  <tr> 
		  <td><p>2.</p></td>
		  <td><p>KK Mladost</p></td>
		  <td><p>3</p></td>
		  <td><p>2/1</p></td>
		  <td><p>-19</p></td>
		  <td><p>5</p></td>
		  </tr>
		<tr> 
		  <td><p>3.</p></td>
		  <td><p>KK Swisslion Leotar</p></td>
		  <td><p>3</p></td>
		  <td><p>1/2</p></td>
		  <td><p>-1</p></td>
		  <td><p>4</p></td>
		  </tr>
		  <tr> 
		  <td><p>4.</p></td>
		  <td><p>OKK Spars</p></td>
		  <td><p>3</p></td>
		  <td><p>1/2</p></td>
		  <td><p>-10</p></td>
		  <td><p>4</p></td>  </tr>
		  <tr> 
		  <td><p>5.</p></td>
		  <td><p>HKK Široki</p></td>
		  <td><p>3</p></td>
		  <td><p>1/2</p></td>
		  <td><p>-12</p></td>
		  <td><p>4</p></td>
		  </tr>
		  <tr> 
		  <td><p>6.</p></td>
		  <td><p>KK Kakanj</p></td>
		  <td><p>3</p></td>
		  <td><p>1/2</p></td>
		  <td><p>-33</p></td>
		  <td><p>4</p></td>
		  </tr>
		</table>
		</div>
	</div>
	
	</body>
</html>