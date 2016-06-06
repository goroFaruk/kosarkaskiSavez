<?php

	session_start();
	?>
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
	$veza = new PDO("mysql:dbname=wtspirala4;host=127.1.253.130:3306;charset=utf8", "adminEEEVaRr", "p7-K61F1FTzz");
	if(isset($_POST['logout'])){
			unset($_SESSION['sesija']);
				session_destroy();
				echo '<script>alert("Niste vise logovani!");</script>';
	}
	
			
			
		if(!isset($_SESSION['sesija']))
	{
		print "<ul>
			<li><a href='index.php'>Početna</a></li>
			<li><a href='liga.php'>Liga</a></li>
			<li><a href='kontakt.php'>Kontakt</a></li>
			<li><a href='ekst_linkovi.php'>Eksterni Linkovi</a></li>
			<li><a href='login.php'>LogIn</a></li>
		</ul>";
	
	}
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
		
		 
	}

			$proslo = false;

			if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) 
			{
				
				$korisnik = $_POST['username'];
			$lozinka = $_POST['password'];
				$login = $veza->query("select korisnicko, pass from autor;");
				if(!$login){
							 echo 'greska';
							 echo $veza->errorInfo()[2];
							 }
				
			 foreach($login as $logx) {
					
					 if($logx['korisnicko'] == $korisnik && $logx['pass']==md5($lozinka)) {
						  $_SESSION['sesija'] = true;
						
						  $proslo = true;
						  break;
					 }
				
			}
				if(!$proslo) {	
					 echo '<script>alert("Pogrešan username ili password");</script>';
				 }
				 
		}
		if($tojeto) {
				header("Location: dodavanjeNovosti.php");
			}
			
			
			
	
		
	?>
	
	<div class="mainbody">
			<br>
			<br>
		
	
	<div class="centar">
		<div class="formaZaLogin">
			<form action="login.php"  method="POST"  id="login">
				<label for="Username">Username:</label><br>
				<input type="text" name="username" id="username" ><br>
				<label for="Password">Password:</label><br>
				<input type="text" name="password" id="pass" ><br> 
				<input type="submit" name ="login" value="Potvrdi" />
			</form>
			<?php
			if(isset($_SESSION['sesija']))
				print "<form id='login-forma' action='login.php' method='POST'><input type='submit' name='logout' value='Log out' /></form>";
			?>
		</div>
	</div>
	</div>
	</div>
	</body>
</html>