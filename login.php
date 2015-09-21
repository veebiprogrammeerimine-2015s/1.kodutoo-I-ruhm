<?php 

   // mvp oleks siis lehekülg, sarnaselt redditile või 4chanile, saab postitada linke pilte jne, kommenteerida neid, tulevikus mõtleks midagi mis natukene eristaks seda lehte neist, kuid alustuseks mõtlesin nii
	
	
	//if(empty($_POST["password"])){
	//$password_error = "Ei saa olla tyhi";
		// 
	//else{
		
	//user_form.php
	
	//jutumärkide vahele input elemendi NAME
	//echo $_POST["email"]; 
	//echo $_POST["password"];
	//ERRORid
    $email_error = "";
    $password_error = "";
    
    
    //Muutujad v22rtustega
    $email = "";
    $password = "";
    
    
    //kontrolli ainult siis kui kasutaja vajutab logi sisse nuppu
    if($_SERVER["REQUEST_METHOD"] == "POST") {
		
        
        //kontrollin kas muutuja $_POST["login"], ehk login nupp
        if(isset($_POST["login"])){
			
			
            
            //Kontrollime kasutaja e-posti, et see ei ole tyhi
            if(empty($_POST["email"])) {
                $email_error = "Ei saa olla tyhi";
            } else {
                
                //annan väärtuse
                $email = test_input($_POST["email"]);
                
            }
            
            //Kontrollime parooli
            if(empty($_POST["password"])) {
                $password_error = "Ei saa olla tyhi";
            } else {
                $password = test_input($_POST["password"]);
            }
            
            if($password_error == "" && $email_error == ""){
                //erroreid ei olnud
                echo "Kontrollin ".$email." ".$password;
                
            }
            
            
        } elseif(isset($_POST["create"])){
            
            //siin kontrollida create vormi v2ljad
            
        }
        
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>
<?php 
    //lehe nimi
    $page_title = "Login leht";
    
    //faili nimi
    $page_file_name = "login.php";
    
?>
<?php require_once("../header.php"); ?>  
    
    <h2>Login</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input name="email" type="email" placeholder="E-post" value="<?php echo $email; ?>" >* <?php echo $email_error; ?> <br><br>
        <input name="password" type="password" placeholder="Parool" >* <?php echo $password_error; ?><br><br>
        
        <input name="login" type ="submit" value="Sign in">
    </form>
    
    <h2>Create user</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input name="email" type="text" placeholder="E-mail" >* <?php echo $email_error; ?> <br><br>
		<input name="password" type="text" placeholder="Parool" >* <?php echo $password_error; ?> <br><br>
        <input name="create" type ="submit" value="Sign up">
    </form>
        
<?php require_once("../footer.php"); ?>  