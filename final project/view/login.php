<html>

<head>
<title>X School</title>

<link rel="stylesheet" href="../css/style.css"/>
<link rel="stylesheet" href="../css/formcss.css"/>





<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script>

		function validate(){
			
			
			
			
			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			
			
			
			
			
			
			if(user == ""){
				document.getElementById('username').innerHTML =" ** Please fill the username field";
				return false;
			}
			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" ** only characters are allowed";
				return false;
			}







			if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				return false;
			}
			

			
			
			
		
			  
				
				
			
			
			
		}

</script>


</head>
<body>

		<div id="wrapper">
			<div id = "header">
			
		<img src="login.jpg" />
		<?php include 'nav.php'?>
		<?php include 'menu.php'?>
		<div class = "home">
		
		
		
		
		
<?php
error_reporting(0);
	session_start();
	include("../model/connection.php");
?>



<h1>Login To Your Account</h1>
<div class="container">
<form action="" method="post" class="form" name="loginform" autocomplete="off" onsubmit="return validate()" >




<div class="form-control">
            <label for="username">Username</label>
            <input type="text" id="user" name="username" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" placeholder="Enter username">
            <span id="username" style="color:red"></span>
</div>
 <div class="form-control">
            <label for="password">Password</label>
            <input type="password" id="pass" name="password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" placeholder="Enter password">
            <span id="passwords" style="color:red"></span>
</div>

<hr style="border: 0.1px solid;">
<input type="checkbox" name = "remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>>
<label>Remember me?</label><br><br>
 


<button name="login" type="submit">Login</button>
</form>
</div>


<?php
if(isset($_POST['login'])){
	$user = $_POST['username'];
	$pwd = $_POST['password'];
	$rem = $_POST["remember"];
	
	$query = "SELECT * FROM ACCOUNTLOGIN WHERE username='$user' && password='$pwd'";
	
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	$result = mysqli_fetch_assoc($data);
	
	if($total == 1){
		
	if(!empty($rem)){  
    setcookie("member_login",$user,time()+ (10 * 365 * 24 * 60 * 60));  
    setcookie("member_password",$pwd,time()+ (10 * 365 * 24 * 60 * 60));
   
   }  
   else  
   {  
    if(isset($_COOKIE["member_login"]))   
    {  
     setcookie ("member_login","");  
    }  
    if(isset($_COOKIE["member_password"]))   
    {  
     setcookie ("member_password","");  
    }  
   }
		
		if($result['acctype'] == "admin"){
		$_SESSION['user_name']=$user;
		header('location:account.php');
		}else if($result['acctype'] == "accountant"){
			$_SESSION['user_name']=$user;
			header('location:demo.php');
		}
	}else{
		echo "<p style='color:red ; text-align:center'>Login failed</p>";
	}
}

?>
		
</div>
<?php include 'footer.php'?>