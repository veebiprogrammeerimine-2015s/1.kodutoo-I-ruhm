<?php
    /*
        Mvp idee kirjeldus:

        Luua oma kerge blogisüsteem
        *Peab olema ehitatud OOP stiili jälgides ja kasutama SPL'i
        *Blogil peab olema kategooria-laadne sortimine ainekoodi põhjal ($_GET('[tag]'))
        *Blogil võiks olla kommentaarid ja kasutajad
        *Kommenteerimiseks ei pea registreerima (OAuth implementatsioon sotsiaalvõrkudega sisselogimiseks)
        *Blogil peab olema RSS feed
        *Minimaalne back-end, postituste vormistamisvõimalused ja postihaldus peavad olemas olema
    */
    $emailErr = $passwordErr = '';
    $name = $email = $password = $gender = $success = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['email'])) {
            $emailErr = 'E-mail is required';
        } else {
            $email = $_POST['email'];
        }
        if (empty($_POST['password']) or empty($_POST['cpassword'])) {
            $passwordErr = 'Password and Confirm password are required';
        } else {
            if (strlen($_POST['password']) < 8) {
                $passwordErr = 'Password must be > 8 characters';
                 // strcasecmp - string case-sensitive comparison
            } elseif (!strcasecmp($_POST['password'], $_POST['cpassword'])) {
                $password = $_POST['password'];
            } else {
                $passwordErr = 'Password and Confirm password must be identical!';
            }
        }
        if (!empty($_POST['name'])) {
            $name = $_POST['name'];
        }
        if (!empty($_POST['gender'])) {
            $gender = $_POST['gender'];
        }
         // If no password or email errors return success message
         if (!strcmp($emailErr, $passwordErr)) {
             $success = 'Succesfully registered!';
         }
    }
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title> User registration page </title>
	</head>
	<body>
		<h2>Register</h2>
		<p><span>* required field.</span></p>
		<form method="post">
			 <input type="text" name="name" placeholder="Name" value="<?php echo $name;?>">
			 <br><br>
		   <input type="email" name="email" placeholder="E-mail" value="<?php echo $email;?>">
		   <span>* <?php echo $emailErr;?></span>
		   <br><br>
			 <!-- $passwordErr returns confirm password errors also -->
		   <input type="password" name="password" placeholder="Password" value="<?php echo $password;?>">
		   <span class="error">* <?php echo $passwordErr;?></span>
		   <br><br>
			 <input type="password" name="cpassword" placeholder="Confirm password" value="<?php echo $password;?>">
			 <span>*</span>
		   <br><br>
			 <input type="radio" name="gender" <?php if (isset($gender) && $gender == 'female') {
    echo 'checked';
}?>  value="female">Female
   		 <input type="radio" name="gender" <?php if (isset($gender) && $gender == 'male') {
    echo 'checked';
}?>  value="male">Male
			 <br><br>
		   <input type="submit" name="submit" value="Register">
		</form>
		<br>
		<a href="user_form.php">Login</a>
		<br>
		<?php echo '<h2>'.$success.'</h2>'?>
	</body>
</html>
