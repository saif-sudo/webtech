<?php include 'header.php'?>
<?php include 'menu.php'?>

<?php

 session_start();
$nameE = $passE = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if(isset($_POST["submit1"])){
	if(empty($_POST["username"])){
		$nameE="Username is requied";
	}else if(empty($_POST["pass"])){
		$passE="Password is requied";
	}else{
		
		   
                          $data = file_get_contents("data.json");  

                          $data = json_decode($data, true);  
                
                          foreach($data as $row)  
                          {  
						  
						  
							  
                               $jname = $row["username"];
							   $jpass = $row["password"];
							   
							   if($_POST["username"]== $jname && $_POST["pass"] == $jpass){
								   		$_SESSION['username'] = $username;
										header("location:account.php");
							   }else{
								   $msg = "Invalid username and password";
							   }
                          }
		
	}
}

	
	

}










?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto ">

<fieldset style="width: 500px; ">
<legend><b>Login</b></legend>
<?php if(isset($msg)){?>
<tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
<?php } ?><br>
<label>User Name:</label>
<input type="text" name="username" value="" ><span class="error">* <?php echo $nameE; ?> </span><br><br>
<label>Password:</label>
<input type="text" name="pass" value="" ><span class="error">* <?php echo $passE; ?> </span><br>
<hr style="border: 0.1px solid;">
<input type="checkbox" name = "rm">
<label>Remember me?</label><br><br>
<input type="submit" name="submit1" value="Submit" style="width: 100px"> <a href="#">Forgot Password?</a>
</fieldset>




<br>

</form>

<?php include 'footer.php'?>