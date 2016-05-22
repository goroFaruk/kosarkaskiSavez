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
						
						function sortirajPoDatumu($d1, $d2) {
							
							$a1=explode(",",$d1);
							$a2=explode(",",$d2);
							$dat1 = $a1[2];
							$dat2 = $a2[2];
							
						
							
							return strtotime($dat1) < strtotime($dat2);
							
						}
						
						function sortirajPoAbecedi($sv1, $sv2){
							$sv1 = strtoupper($sv1);
							$sv2 = strtoupper($sv2);
							return $sv1[0] > $sv2[0];
						}
						
						$vijesti = file("dodaj_novosti.csv");
						$broj_novosti = count($vijesti);
						
					if(isset($_POST['dugme2'])){
							usort($vijesti, "sortirajPoAbecedi");
							$i=0;
							for($i=0; $i < $broj_novosti; $i++) {
							$cv =explode(',',$vijesti[$i]);
							$cv[0]=str_replace(";.?",",",$cv[0]);
							$cv[2]=str_replace(";.?",",",$cv[2]);
							
							print " <li class='vijesti'>
							<h4>".$cv[0]."</h4>
									<img src='".$cv[3]."' alt='".$cv[3]."'>
									<p>Objavljeno <time class='datumiObjave' datetime='".$cv[2]."'></time>.</p>
		<p>
		".$cv[1]." 
		</p>
		
		</li>";
		
						}
						}
						elseif(isset($_POST['dugme1'])){
							
							usort($vijesti, "sortirajPoDatumu");
							
							for($i=0; $i < $broj_novosti; $i++) {
								$cv =explode(',',$vijesti[$i]);
								//$cv = fgetcsv($vijesti[$i], 2024);
								$cv[0]=str_replace(";.?",",",$cv[0]);
							
							
							print "<li class='vijesti'>
							<h4>".$cv[0]."</h4>
									<img src='".$cv[3]."' alt='".$cv[3]."'>
									<p>Objavljeno <time class='datumiObjave' datetime='".$cv[2]."'></time>.</p>
		<p>
		".$cv[1]." 
		</p>
		
		</li>";	
							}
							
						}
						else{
							
							$i=0;
							for($i=0; $i < $broj_novosti; $i++) {
							$cv =explode(',',$vijesti[$i]);
							//$cv = fgetcsv($vijesti[$i], 2024);
							$cv[0]=str_replace(";.?",",",$cv[0]);
							
								print "<li class='vijesti'>
							<h4>".$cv[0]."</h4>
									<img src='".$cv[3]."' alt='".$cv[3]."'>
									<p>Objavljeno <time class='datumiObjave' datetime='".$cv[2]."'></time>.</p>
		<p>
		".$cv[1]." 
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