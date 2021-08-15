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
								<h1 class="m-3 pt-3 userhome">Change Your Password</h1>
								<div class="card-body">

									
										<form action="" method="post" class="form" autocomplete="off">


												<div class="form-control">
												<label for="password">Type Current Password</label>
												<input type="password" id="password" name="password" value="" placeholder="Enter Current password">
											
											</div>
											<div class="form-control">
												<label for="password">Type New Password</label>
												<input type="password" id="password" name="passwordtwo" value="" placeholder="Enter New password">
											
											</div>
											
			
												<button name="login" type="submit">Change Password</button>



										</form>

									<?php
									if(isset($_POST['login'])){
										
											$idp = $result['id'];
											$pass =$_POST['password'];
											$passtwo =$_POST['passwordtwo'];
											
											
											
											if($pass == "" && $passtwo == ""){
												echo "<p style='color:red ; text-align:center'>Please Enter All Password fields</p>";
											}
											
											else if($pass!=$result['password']){
												echo "<p style='color:red ; text-align:center'>Sorry, Password didn't match </p>";
											}else{
												if($result['acctype'] == "admin"){
															$query = "UPDATE ACCOUNTLOGIN SET PASSWORD='$passtwo'  WHERE ID ='$idp'";
														 mysqli_query($conn,$query);
															
												}else if($result['acctype'] == "accountant"){
													
													$query = "UPDATE ACCOUNTLOGIN SET PASSWORD='$passtwo'  WHERE ID ='$idp'";
													$aquery = "UPDATE ACCOUNTANT SET PASSWORD='$passtwo'  WHERE ID ='$idp'";
													 mysqli_query($conn,$query);
													mysqli_query($conn,$aquery);
															
												}else if($result['acctype'] == "teacher"){
													
													$query = "UPDATE ACCOUNTLOGIN SET PASSWORD='$passtwo'  WHERE ID ='$idp'";
													$aquery = "UPDATE TEACHER SET PASSWORD='$passtwo'  WHERE ID ='$idp'";
													 mysqli_query($conn,$query);
													mysqli_query($conn,$aquery);
															
												}else if($result['acctype'] == "student"){
															$query = "UPDATE ACCOUNTLOGIN SET PASSWORD='$passtwo'  WHERE ID ='$idp'";
													$aquery = "UPDATE STUDENT SET PASSWORD='$passtwo'  WHERE ID ='$idp'";
													 mysqli_query($conn,$query);
													mysqli_query($conn,$aquery);
												}
												
												
												
												
												echo "<p style='color:green ; text-align:center'>Password Updated Successfully</p>";
											}

									
									
									}
									
									
									
									
									?>
									
                  
									
								
								
								</div>
							
							</div>
						
						
						</div>
						
					</div>
				
				
				</div>
	

<?php include 'footer.php'?>