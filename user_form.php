<?php

	// user_form.php
	
	//jutumÃ¤rkide vahele input elemendi NAME
	//echo $_POST["email"]; 
	//echo $_POST["password"];
	//echo $_POST["comment"];
	
	$email_error = "" ;
	$password_error = "" ;
	$comment_error = "" ;


	// kontrolli ainult siis, kui kasutaja vajutab "logi sisse" nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		//kontrollime, et e-post ei oleks tÃ¼hi
		if(empty($_POST["email"])) { 
			$email_error = "Ei saa olla tÃ¼hi";
		}
		//kontrollime parooli	
		if(empty($_POST["password"])) { 
			$password_error = "Ei saa olla tÃ¼hi";
		} 
		if(empty($_POST["comment"])) { 
			$comment_error = "Ei saa olla tÃ¼hi";
		}
		else {
		
			//parooli pikkuse kontroll, kui see ei ole tÃ¼hi
			if(strlen($_POST["password"])<8){
				
				$password_error = "Peab olema vÃ¤hemalt 8 sÃ¼mbolit pikk";
		
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
			<input name="email" type="email" placeholder="E-post">* <?php echo $email_error; ?><br> <br>
			<input name="password" type="password" placeholder="parool">*<br> <br> <?php echo $password_error; ?> <br> <br>

			<textarea name="comment" rows="10" cols="30" placeholder="comment">Kasutasin mõne rea puhul näidete abi. Suuremaks tööks olen mõelnud trennipäeviku koostamist.</textarea>*<br> <br> <?php echo $comment_error; ?> 
			
			<input type="checkbox" name="option1" value="o1"> Sain kodutööst aru.
			<br>
			<input type="checkbox" name="option2" value="o2"> Oskasin selle ka üles laadida. 
			<br>

			<input type="submit" value="logi sisse"> 
		</form>
		
		<h4>Create user</h4>
		
	</body>
</html>