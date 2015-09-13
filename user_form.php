<?php

	// user_form.php
	
	//jutumärkide vahele input elemendi NAME
	//echo $_POST["email"];
	//echo $_POST["password"];
		
	$email_error = "";
	$password_error = "";
	$eesnimi_error = "";
	
	
	//Kontrolli ainult siis kui kasutaja vajutab logi sisse nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
		//Kontrollime kasutaja e-posti, et see ei ole tühi
		if(empty($_POST["email"])) {
			$email_error = "ei saa olla tühi";
		}	
		
		//Kontrolli parooli
		if(empty($_POST["password"])) {
			$password_error = "sisesta parool";
		} else {
			//Parool ei ole tühi, kontrollime pikkust
			if(strlen($_POST["password"]) < 8 ){
				
				$password_error = "Peab olema vähemalt 8 sümbolit pikk";
			}
		}
		
		//ega nimi ei ole tühi
		if (empty($_POST["eesnimi"])) {
			$eesnimi_error = "Palun sisesta eesnimi";
		}
	}
?>

<html>
	<head>
		<title>User login page</title>
	</head>
	<body>
	
		<h2>Logi sisse</h2>
		<form action="user_form.php" method="post">
			<input name="email" type= "email"  placeholder="E-post" >* <?php echo $email_error; ?> <br> <br>
			<input name="password" type= "password"  placeholder="Parool" >* <?php echo $password_error; ?> <br> <br>
		
			<input type="submit" value= "Logi sisse"> 
		</form>
		
		<h2>Loo kasutaja</h2>
		<form action="user_form.php" method="post">
			Sisesta E-posti aadres: <input name="email" type= "email"  placeholder="E-post" >* <?php echo $email_error; ?> <br> <br>
			Sisesta parool: <input name="password" type= "password"  placeholder="Parool" >* <?php echo $password_error; ?> <br> <br>
			Eesnimi: <input name="Eesnimi" type= "text"  placeholder="Eesnimi"" >* <?php echo $eesnimi_error; ?> <br> <br>
		
			<input type="submit" value= "Loo kasutaja"> 
		</form>
		
		<h4>Mul üks väike mvp idee on, aga sellest ma praegu ei kirjuta. Pole veel selles idees kindel. Loodan, et järgmine kord on mingist ideest midagi rääkida ;) </h4>
		
	
	</body>
</html>