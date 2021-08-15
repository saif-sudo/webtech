		<?php
session_start();

include 'header.php';
include("../model/connection.php");


	$userprofile = $_SESSION['user_name'];
	if($userprofile == true){
		
	}else{
		header('location:login.php');
	}
	
	$query = "SELECT * FROM ACCOUNTLOGIN WHERE username='$userprofile'";
	
	$data = mysqli_query($conn, $query);
	$result = mysqli_fetch_assoc($data);
	
	
?>
		
		
		
		
		
		
		
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
			
			<h1 style="text-align:center">Welcome, <?php echo $result['name']?> To Accountant Account</h1>
			
			</div>
			
		</div>
		
		<?php include 'footer.php'; ?>
		
		
	