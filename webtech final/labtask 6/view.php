		<?php 
	
		include 'header.php';
		
		session_start();

	include("model/connection.php");


	$userprofile = $_SESSION['user_name'];
	if($userprofile == true){
		
	}else{
		header('location:login.php');
	}
	
	$query = "SELECT * FROM ADMINREG WHERE username='$userprofile'";
	
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
			
			<h1 style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto ">Info Of Admin <?php echo $result['name']?></h1>
			
			
			


				<img src="<?php echo $result['profilepic'];?> " height="250px" width="200px" /><br /> <br />
				
				
                  
                      
					 <label>Admin ID:</label>  
                     <?php echo $result['id']?><br /> <br />
                     <label>Admin Name:</label>  
                      <?php echo $result['name']?><br />  <br />
					 <label>Admin Username:</label>  
                      <?php echo $result['username']?><br />  <br />
					
                     <label>Admin E-mail:</label>
                      <?php echo $result['email']?><br />  <br />
                     <label>Admin Position:</label>
                     <?php echo $result['position']?><br />  <br />
					 <label>Admin Degree:</label>
                      <?php echo $result['degree']?><br />  <br />
					 <label>Admin Salary:</label>
                      <?php echo $result['salary']?><br />  <br />
					 <label>GENDER:</label>
                    <?php echo $result['gender']?><br />  <br />
				
                    <label>Date of Birth:</label>
                     <?php echo $result['dob']?><br />  <br />
                  
			
					<?php include 'footer.php'?>
			</div>	
			



				
			


                     
                                    
                    
				
               




	



