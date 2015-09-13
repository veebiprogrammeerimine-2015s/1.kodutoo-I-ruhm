<?php
    //user_form.php
    
    //jutumärkide vahele input elemendi NAME
    //echo $_POST["email"];
    //echo $_POST["password"];
    
    $email_error="";
    $password_error="";
	$password1_error="";
	$password2_error="";
	$firstname_error="";
	$lastname_error="";
	$epost_error="";
	
    
    //Kontrolli ainult siis, kui kasutaja vajutab logi sisse nuppu
    if($_SERVER["REQUEST_METHOD"] == "POST"){      //kasutaja vajutas nuppu
    
        //Kontrollime kasutaja e-post, et see ei ole tühi
        if(empty($_POST["email"])){
            $email_error ="Ei saa olla tühi";
        }
        //Kontrollime parooli
        if(empty($_POST["password"])){
            $password_error="Ei saa olla tühi";
        }else{
            
            //parool ei ole tühi, kontrollime pikkust
            if(strlen($_POST["password"]) < 8){
                $password_error="Peab olema vähemalt 8 sümbolit";
                
            }
            
        }
		if(empty($_POST["firstname"])){
			$firstname_error="Kohustuslik väli";
		}
		if(empty($_POST["lastname"])){
			$lastname_error="Kohustuslik väli";
		}
        if(empty($_POST["epost"])){
			$epost_error="Kohustuslik väli";
		}
        if(empty($_POST["password1"])){
            $password1_error="Ei saa olla tühi";
        }else{
            
            //parool ei ole tühi, kontrollime pikkust
            if(strlen($_POST["password1"]) < 8){
                $password1_error="Peab olema vähemalt 8 sümbolit";
                
            }
            
        }
		if(empty($_POST["password2"])){
            $password2_error="Ei saa olla tühi";
        }else{
            
            //parool ei ole tühi, kontrollime pikkust
            if(strlen($_POST["password2"]) != strlen($_POST["password1"])){
                $password2_error="Vale parool";
                
            }
            
        }
    }
       
?> 
    

<html>
    
    <head>
        <title>User login page</title>
    </head>
    <body>
		<p>Tegemist on e-poega, kus on võimalik soetada erinevate jooksuürituste pääsmeid.</p>
        <h2>Login</h2>
        <form action="user_form.php" method="post">
        <input name="email" type="email" placeholder="E-post">* <?php echo $email_error;?> <br><br>
        <input name="password" type="password" placeholder="Parool">* <?php echo $password_error;?> <br><br>
        
        <input type="submit" value="Logi sisse">
        </form>
        <h2>Create user</h2>
		<form action="user_form.php" method="post">
        <input type="text" name="firstname" placeholder="Eesnimi">* <?php echo $firstname_error;?><br><br>
		<input type="text" name="lastname" placeholder="Perenimi">*<?php echo $lastname_error;?><br><br>
		<input type="radio" name="sex" value="female" checked>Female <br><br>
		<input type="radio" name="sex" value="male">Male <br><br>
		<input type="email" name="epost" placeholder="E-post">*<?php echo $epost_error;?><br><br>
		<input type="password" name="password1" placeholder="Parool">*<?php echo $password1_error;?><br><br>
		<input type="password" name="password2" placeholder="Korda parooli">*<?php echo $password2_error;?><br><br>
		<input type="submit" value="Loo konto">
		


		</form>
    </body>
    
</html>