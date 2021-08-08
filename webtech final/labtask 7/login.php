<?php include 'header.php'?>
		<img src="login.jpg" />
		<?php include 'menu.php'?>
		<div class = "home">
		
		
		
		
		
<?php
	//session_start();
	//include("model/connection.php");
?>

<form action="" method="post" style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto ">
<fieldset style="width: 500px; ">
<legend><b>Login Registration</b></legend>

Username: <input type="text" name="username" value="" /><br><br>
Password: <input type="text" name="password" value=""/><br><br>
<hr style="border: 0.1px solid;">
<input type="checkbox" name = "rm">
<label>Remember me?</label><br><br>
<input type="submit" name="submit" value="Login"/>

</fieldset>
</form>

<?php
if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$pwd = $_POST['password'];
	
	$query = "SELECT * FROM ADMINREG WHERE username='$user' && password='$pwd'";
	
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	
	if($total == 1){
		$_SESSION['user_name']=$user;
		header('location:account.php');
	}else{
		echo "Login failed";
	}
}

?>
		
</div>
<?php include 'footer.php'?>