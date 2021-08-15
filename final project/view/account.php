<?php
include("accountheader.php");
						include("../model/connection.php");


	$userprofile = $_SESSION['user_name'];
	if($userprofile == true){
		
	}else{
		header('location:login.php');
	}
	
	$query = "SELECT * FROM ACCOUNTLOGIN WHERE username='$userprofile'";
	
	$data = mysqli_query($conn, $query);
	$result = mysqli_fetch_assoc($data);
	
	include("adminmenu.php");
	
	
?>
					
						
						<div class="col-md-9 mt-1" style="background-color: #AAD6C1;">
							<div class="card mb-3 content ">
								<h1 class="m-3 pt-3 userhome">Welcome to <?php echo $result['acctype']?> Account <?php echo $result['name']?></h1>
								<div class="card-body">

									
									
									
                  
									
								
								
								</div>
							
							</div>
						
						
						</div>
						
					</div>
				
				
				</div>
	

<?php include 'footer.php'?>