<?php

		// user_form.php
		// jutumärkide vahele input elemendi väärtus
		
		//echo $_POST["email"];
		
		//echo $_POST["password"];
		
		$email_error = "";
		$password_error = "";
		$id_error = "";
		//$password_len_error = "";
		
		//kontrolli ainult siis, kui kasutaja vajutab logi sisse nuppu
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["email"]))	{
				$email_error = "viga";
			}	
			if(empty($_POST["password"])) {
				$password_error = "Teie parooli lünk on tühi";
			}else {
				//parool ei saa olla tühi, kontrollime pikkust
				if(strlen($_POST["password"]) < 8 ) {
					$password_error = "Peab olema vähemalt 8 sümbolit pikk";
				}
				
			}
			
			
			if(empty($_POST["isikukood"]))	{
				$id_error = "ei saa olla tühi";
			}
			
			
			if(empty($_POST["create_email"]))	{
				$email_error = "Ei saa olla tühi";
			}	
			if(empty($_POST["create_password"])) {
				$password_error = "Teie parooli lünk on tühi";
			}else {
				//parool ei saa olla tühi, kontrollime pikkust
				if(strlen($_POST["password"]) < 8 ) {
					$password_error = "Peab olema vähemalt 8 sümbolit pikk";
				}
				
			}
				
			
			
			
			
		}
?>
<html>
	<head>
	 <title>EvoGlass</title>
	</head>
	<body>
		<h4>See veebileht on loodud selleks, et tellida endale omapärased prillid, mis sobiksid vastavalt inimese peakujuga ja oleksid sobiva hinnaga.</h4>
		<h4>Lähemalt tutvumiseks minge sellele leheküljele : http://evoklaas.blogspot.com.ee/ </h4>
		<h4>Facebookist leiate meid leheküljelt : https://www.facebook.com/EVOGlasses?fref=ts </h4>
		<h2>Login</h2>
		<form action="User_form.php" method="post">
		
		<input name="email" type="email" placeholder="E-post">* <?php echo $email_error; ?> <br> <br> 
		<input name="password" type="password" placeholder="Password">* <?php 
			echo $password_error; ?> <br> <br> 
		<input type="submit" value="log in">
		</form>
		<h2>Sign up</h2>
		<form action="User_form.php" method="post">
		
		<input name="isikukood" type="text" placeholder="personal code">* <?php echo $id_error; ?> <br> <br> 
		<input name="test" type="text" placeholder="age"> <br> <br>
		<input name="create_email" type="text" placeholder="Email">* <?php echo $email_error; ?> <br> <br> 
		<input name="create_password" type="text" placeholder="Password">* <br> <br>
		
		Gender:
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="female">Female
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="male">Male	<br> <br>
		
		<input type="submit" value="log in">	
			</form>
	</body>
</html>