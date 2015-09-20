<?php 
    //MVP IDEE - Note taker. Saab oma postitusi kirja panna ja ise näha. Alguseks kõik ning edasiseks saab äkki joonistada, due date, kategooriad etc?
	//errorid
    $email_error = "";
    $password_error = "";
    //kontrollib siis, kui vajutatakse logi sisse nuppu
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    
        //Kontrollime e-posti
        if(empty($_POST["email"])) {
            $email_error = "Ei tohi olla tühi";
				$email = test_input($_POST["email"]);
        }
        
        //Kontrollime parooli
        if(empty($_POST["password"])) {
            $password_error = "Ei tohi olla tühi";
        } else {
            
        //Kontrollime parooli, et oleks üle 8 tähe
        if(strlen($_POST["password"]) < 8 ){
                
            $password_error = "Peab olema vähemalt 8 sümbolit pikk";
                
        }
            
    }
   	  
}
?>
<html>
    <head>
        <title>Sisselogimine</title>
    </head>
    <body>
        <h2>Logi sisse</h2>
        <form action="user	form.php" method="post">
            <input name="email" type="email" placeholder="E-post"><?php echo $email_error; ?> <br><br>
            <input name="password" type="password" placeholder="Parool"><?php echo $password_error; ?><br><br> 
            <input type ="submit" value="Logi sisse"></form>
        <h2>Loo kasutaja</h2>
    </body>
</html>

