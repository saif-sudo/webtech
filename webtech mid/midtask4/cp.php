
		<?php 
		
		$name = $pass = $user = $pas = $usermatch = $pasmatch = $newpass = $renewpass = $curpas = "";
$nameE = $passE = $newpassE = $renewpassE = $currpassE = "";
$currpass = "saifpas1";
$currpasS = "" ;
	
		include 'header.php'?>
		
		<div class = "menu"><ul><li><a href="logout.php" >Logout</ul></li></ul></div>
		</div>
		
		

		<div class = "account">
		<div class= "sidebar">
				<ul>
					<li><a href="account.php">Dashboard</a></li>
					<li><a href="view.php">View Profile</a></li>
					<li><a href="home.php">Edit Profile</a></li>
					<li><a href="upp.php">Change Profile Picture</a></li>
					<li><a href="cp.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			
			
		<?php	
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
		if($curpas != $currpass){
		$currpassE = "Please type current password";
	}else if($newpass == $curpas){
		$newpassE="New Password should not be same as the Current Password";
	}else if($newpass != $renewpass ){
		$renewpassE = "New Password must match with the Retyped Password";
	}else{
		$currpasS = "Password Changed";
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