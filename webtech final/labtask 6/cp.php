
		<?php 
		
		$name = $pass = $user = $pas = $usermatch = $pasmatch = $newpass = $renewpass = $curpas = "";
$nameE = $passE = $newpassE = $renewpassE = $currpassE = "";

session_start();
$nameE = $passE = "";


	
		
		
	


	
	



$currpasS = "" ;
	
		include 'header.php'?>
		
		<div class = "menu"><ul><li><a href="logout.php" >Logout</ul></li></ul></div>
		</div>
		
		

		<div class = "account">
		<div class= "sidebar">
				<ul>
					<li><a href="account.php">Dashboard</a></li>
					<li><a href="view.php">View Profile</a></li>
					<li><a href="cp.php">Change Password</a></li>
					<li><a href="sr.php">Student Registration</a></li>
					<li><a href="vsl.php">View All Student list</a></li>
					<li><a href="tr.php">Teacher Registration</a></li>
					<li><a href="vtl.php">View All Teachers List</a></li>
					<li><a href="ar.php">Account Registration</a></li>
					<li><a href="val.php">View All Accountant List</a></li>
					<li><a href="notice.php">Notice</a></li>
					<li><a href="msg.php">Message</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			
			<div class = "userhome">
			
			<h1 style="text-align:center">Change Password</h1>
			
			</div>
			
			
		<?php	
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
if(isset($_POST["submit2"])){
	$curpas = $_POST['currpass'];
	$newpass = $_POST['newpass'];
	$renewpass = $_POST['renewpass'];
	if(empty($_POST["currpass"])){
		$currpassE="Type Current Password is requied";
	}else if(empty($_POST["newpass"])){
		$newpassE="Type New Password is requied";
	}else if(empty($_POST["renewpass"])){
		$renewpassE="Retype New Password is requied";
	}else{
		
		
		 $data = file_get_contents("data.json");  

                          $data = json_decode($data, true);  
						 
						   
                
                          foreach($data as $row)  
                          {  
								
							
							  
                              
							   $jpass = $row["password"];
							   
							   if($_POST["currpass"] == $jpass){
								   		$currpass = $jpass;
										
										if($newpass == $curpas){
												$newpassE="New Password should not be same as the Current Password";
											}else if($newpass != $renewpass ){
												$renewpassE = "New Password must match with the Retyped Password";
											}else{
												
												
																
													$_SESSION['password'] = $newpass;			 
												
												$currpasS = "Password Changed";
											}
							   }else{
								  $currpassE = "Please type current password";
							   }
                          }
		
		
		
	
	
	}
	
	}
		}






?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto ">




<fieldset style="width: 500px; ">
<legend><b>CHANGE PASSWORD</b></legend>
<label>Current Password:</label>
<input type="text" name="currpass" value="" ><span class="error">* <?php echo $currpassE; ?> </span><br><br>
<label>New Password:</label>
<input type="text" name="newpass" value="" ><span class="error">* <?php echo $newpassE; ?> </span><br><br>
<label>Retype New Password:</label>
<input type="text" name="renewpass" value="" ><span class="error">* <?php echo $renewpassE; ?> </span><br>
<hr style="border: 0.1px solid;">
<input type="submit" name="submit2" value="Submit" style="width: 100px">
</fieldset>

<?php
	
	echo $currpasS;
?>
<br>

</form>

			
			
			
 </div>


<?php include 'footer.php'?>