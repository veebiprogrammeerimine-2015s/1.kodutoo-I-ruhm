<?php

	//user_form.php
	
	//jutumärkide vahele input elemendi NAME
	//echo $_POST["email"]; 
	//echo $_POST["password"];
	//echo $_POST["comment"];
	
	$email_error = "" ;
	$password_error = "" ;
	$email_2_error = "" ;
	$password_2_error = "" ;


	//$email="";
	//$password="";
	
	
	// kontrolli ainult siis, kui kasutaja vajutab "logi sisse" nuppu
	    if($_SERVER["REQUEST_METHOD"] == "POST"){
					
		//kontrollime, mis nuppu vajutati		
		if(isset($_POST["login"])){ 
		//kontrollime, et e-post ei oleks tühi	
			if( empty($_POST["email"])){
				
			
			$email_error = "Ei saa olla tühi";
		} else {
			
		$email = input($_POST["email"]);}
		
		//kontrollime parooli	
		if(empty($_POST["password"])); { 
			$password_error = "Ei saa olla tühi";
		} 
		
		//parooli pikkuse kontroll, kui see ei ole tühi			
			if(strlen($_POST["password"])<8){
				
				$password_error = "Peab olema vähemalt kaheksa sümbolit pikk";
		}  
		
		} elseif(isset($_POST["create"])){
		
	 
		    if(empty($_POST["email_2"])) { 
			$email_2_error = "Ei saa olla täitmata";
		} 	else {
		}
			if(empty($_POST["password_2"])) { 
			$password_2_error = "Ei saa olla täitmata";
		
		}	
	}
	}
		
?>

<html>
	<head>
		<title>User login page</title>
	</head>
	<body>
	
		<h2>Login</h2>
		<form action="user_form.php" method="post">
			<input name="email" type="email" placeholder="E-post">*<?php echo $email_error; ?><br> <br>
			<input name="password" type="password" placeholder="parool">*<?php echo $password_error; ?> <br> <br>

			<input name="login" type="submit" value="logi sisse"> 
		</form>
		
		<h2>Create user</h2>
			<form action="user_form.php" method="post">
			<input name="email_2" type="email" placeholder="E-post">* <?php echo $email_2_error; ?><br> <br>
			<input name="password_2" type="password" placeholder="parool">* <?php echo $password_2_error; ?> <br> <br>
			<input name="comment" type="text" placeholder="comment"> <br> <br> 
			<textarea name="comment1" type="text" cols= "40" rows= "5" placeholder="Lisainfo"></textarea> <br> <br>
			<textarea name="comment2" type="text" cols= "60" rows= "5"> Enda tööks planeerin trennipäeviku koostamise. Tegemist võiks olla sellise asjaga, kuhu inimene kirjutab, et mis päevadel ja mida ta täpselt tegi. Andmete põhjal saaks siis teha erinevaid arvutusi ja järeldusi. Kasutajaid võib olla ka mitu.</textarea> <br> <br>
			<input name="option1" type="checkbox" value="o1"> Sain aru. <br>
			<input name="option2" type="checkbox" value="o2"> Oskasin laadida githubi. <br>
			<input name="create" type="submit" value="loo kasutaja"> 
		</form>
		
	</body>
</html>	

	