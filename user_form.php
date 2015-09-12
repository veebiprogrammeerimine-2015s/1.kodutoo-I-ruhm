<?php

	// user_form.php
	
	//jutumärkide vahele input elemendi NAME
	//echo $_POST["email"]; 
	//echo $_POST["password"];
	//echo $_POST["comment"];
	
	$email_error = "" ;
	$password_error = "" ;
	$comment_error = "" ;


	// kontrolli ainult siis, kui kasutaja vajutab "logi sisse" nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		//kontrollime, et e-post ei oleks tühi		
		if(empty($_POST["email"])) { 
			$email_error = "Ei saa olla tühi";
		}
		//kontrollime parooli	
		if(empty($_POST["password"])) { 
			$password_error = "Ei saa olla tühi";
		} 
		if(empty($_POST["comment"])) { 
			$comment_error = "Ei saa olla tühi";
		} else {
		
			//parooli pikkuse kontroll, kui see ei ole tühi			
			if(strlen($_POST["password"])<8){
				
				$password_error = "Peab olema vähemalt kaheksa sümbolit pikk";
		
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
			<input name="password" type="password" placeholder="parool">*
<?php echo $password_error; ?> <br> <br>

			<input name="comment" type="text" placeholder="comment">* <?php echo $comment_error; ?> <br> <br> 
			<textarea name="comment1" type="text" cols= "40" rows= "5" placeholder="see võib tühi ka olla"></textarea> <br> <br>
			<textarea name="comment2" type="text" cols= "60" rows= "5"> Enda tööks planeerin trennipäeviku koostamise. Tegemist võiks olla sellise asjaga, kuhu inimene kirjutab, et mis päevadel ja mida ta täpselt tegi. Andmete põhjal saaks siis teha erinevaid arvutusi ja järeldusi.</textarea> <br> <br>
			<input name="option1" type="checkbox" value="o1"> Sain aru.
			<br>
			<input name="option2" type="checkbox" value="o2"> Oskasin laadida githubi. 
			<br>

			<input type="submit" value="logi sisse"> 
		</form>
		
		<h4>Create user</h4>
		
	</body>
</html>