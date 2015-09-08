<?php
$email_error = "";
$pw_error = "";
$sugu_error = "";
	// kontrolli ainult kui vajutatakse submit
	if($_SERVER["REQUEST_METHOD"]  == "POST"){
			
	//kontrollime eposti et poleks tühi
	
			if(empty($_POST["email"])){
		$email_error = "Gibe email please";
		}
	}
	
	if($_SERVER["REQUEST_METHOD"]  == "POST"){

		if(empty($_POST["password"])){
			$pw_error = "Gibe PW please";
		} else {
			
			//kontrollime pikkust
			if(strlen($_POST["password"] <= 8)){
				$pw_error = "peab olema vähemalt 8 sümbolit pikk";
			}
		}
	}
?>

<link rel="stylesheet" href="styles.css">
<html>

	<head>
			<title>
			Login page
		</title>
	
	</head>

	<body>
			<div id="header" style="border:2px solid gray">
		
			</div>
			<div class="center">
			<h2>Create user</h2>
			<form action="teine_osa.php" method="post">
			
				<p>Kasutajatunnus</p>
				<input name="email" type="email" placeholder="@example.com" > <?php echo $email_error;?> <br>
				<p>Parool</p>
				<input name="password" type="password" placeholder="Parool" > <?php echo $pw_error;?>
				<br>
				<p>Sugu</p>
				<select name="Sugu" style="width:173px;"> 
					<option value="0">mees</option> 
					<option value="1">naine</option>  
				</select> <?php echo $sugu_error;?> 
				<br>
				<p>Eesnimi</p>
				<input name="Eesnimi" type="text" placeholder="example: John" >
				<br>
				<p>Perekonnanimi</p>
				<input name="Perekonnanimi" type="text" placeholder="example: Doe" >
				<br>
				<p>Elukoht</p>
				<input name="Elukoht" type="text" placeholder="example: Harjumaa" >
				<br>
				
				<input type="submit" value="Log In">
				
			</form>	
			</div>
	</body>
	
</html>