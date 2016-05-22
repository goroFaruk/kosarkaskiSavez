<!DOCTYPE HTML>
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
	
		<div class="forma">	
			<form  method="POST">
				<div id="naslov" >
				<label for = "Naslov">Unesite naslov: </label>
				<br>
				<textarea name="naslov" rows="1" cols = "35"></textarea>
				<br>			
				
				<div id="labela_tekst">
				<label for="UnosTeksta">Unesite vijest:</label>
				<br>
				<textarea name="tekstovi" rows="6" cols="35"></textarea>
				</div>
			<br>

			
			<label for="IzborSlike">Izaberite sliku:</label>
			<input type="file" name="slikaa" required>
			<br>
			<br>
			<div id="dugme">
			<button type="submit" name="dugmee" action="dodavanjeNovosti.php"> Submit  </button>
			</div>
	
			</form>
		</div>
		<?php
			if (isset($_POST['dugmee']))
			{
				$fp = fopen('dodaj_novosti.csv', 'a+');
				$tekst = utf8_encode(htmlspecialchars($_POST['tekstovi']));
				$d = date("Y-m-d")."T".date("H:i:s")."+02:00";
				$list = array (
				array($_POST['naslov'],$tekst,$d, $_REQUEST['slikaa'])
						);

				foreach ($list as $fields) {
				fputcsv($fp, $fields);
			}

				fclose($fp);	
			}
		?>
	</body>

</html>
