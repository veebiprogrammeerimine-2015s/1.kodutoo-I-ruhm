<?php
$email_error = "";
$pw_error = "";
$gender_error = "";
	// kontrolli ainult kui vajutatakse submit
	if($_SERVER["REQUEST_METHOD"]  == "POST"){
			
	//kontrollime eposti et poleks tühi
	
			if(empty($_POST["email"])){
		$email_error = "Sisestage e-mail";
		}
	}
	
	if($_SERVER["REQUEST_METHOD"]  == "POST"){

		if(empty($_POST["password"])){
			$pw_error = "Sisestage parool";
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
			User creation page
		</title>
	
	</head>

	<body>
			<div id="header" style="border:2px solid gray">
		
			</div>
			<div class="center">
			<p style="font-size:30px";>Create user</p>
			<form action="teine_osa.php" method="post">
			
				<p>Email/Username</p>
				<input name="email" type="email" placeholder="@example.com" > <?php echo $email_error;?> <br>
				<p>Password</p>
				<input name="password" type="password" placeholder="Parool" > <?php echo $pw_error;?>
				<br>
				<p>Gender</p>
				<select name="gender" style="width:173px;"> 
					<option value="0">Male</option> 
					<option value="1">Female</option>  
				</select> <?php echo $gender_error;?> 
				<br>
				<p>First name</p>
				<input name="Eesnimi" type="text" placeholder="example: John" >
				<br>
				<p>Last name</p>
				<input name="Perekonnanimi" type="text" placeholder="example: Doe" >
				<br>
				<p>Address</p>
				<input name="Elukoht" type="text" placeholder="example: Harjumaa" >
				<br><br>
				
				<input type="submit" value="Create User">
				
			</form>	
			</div>
			<div class="center2">
			<p style="font-size:30px";>Log In</p>
			<form action="teine_osa.php" method="post">
			
				<p>Email/Username</p>
				<input name="email" type="email" placeholder="@example.com" > <?php echo $email_error;?> <br>
				<p>Password</p>
				<input name="password" type="password" placeholder="Parool" > <?php echo $pw_error;?>
				<br><br>
				
				<input type="submit" value="Log In">
				
			</form>	
			</div>
	</body>
	
</html>