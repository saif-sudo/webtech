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
								<h1 class="m-3 pt-3 userhome">Accountant Registration</h1>
								<div class="card-body">
								
								
				

					
                  <form action="" method="post" class="form" id="loginform"  enctype="multipart/form-data" onsubmit="return regvalidate()">


					<div class="form-control">
					 <label>Accountant ID</label>  
                     <input type="text" name="tid" id="teid" /><br />  <br />
					 
					 <span id="tid" style="color:red"></span>
					</div>
					
					
					<div class="form-control">
                     <label>Accountant Name</label>  
                     <input type="text" name="tname" id="tna" /><br />  <br />
					  <span id="tnam" style="color:red"></span>
					</div>
					 
					 
					<div class="form-control">
                     <label>Accountant Username</label>  
                     <input type="text" name="tuser"  id="teuser" /><br />  <br />
					  <span id="tuser" style="color:red"></span>
					</div>
					
					<div class="form-control">
                     <label>Accountant Password</label>  
                     <input type="text" name="tpass" id="tepass" /><br />  <br />
					  <span id="tpass" style="color:red"></span>
					</div>
					
					 <div class="form-control">
                     <label>Accountant E-mail</label>
                     <input type="text" name = "temail" id="tecemail" /><br /><br />
					  <span id="temail" style="color:red"></span>
					</div>
					 
					 <div class="form-control">
                     <label>Accountant Position</label>
                     <input type="text" name = "tpos" id="tepos" /><br /><br />
					  <span id="tpos" style="color:red"></span>
					</div>
					 
					 <div class="form-control">
					 <label>Accountant Degree</label>
                     <input type="text" name = "tdeg" id="tedeg" /><br /><br />
					  <span id="tdeg" style="color:red"></span>
					</div>
					
					<div class="form-control">
					 <label>Accountant Salary</label>
                     <input type="text" name = "tsa" id="tesa" /><br /><br />
					  <span id="tsa" style="color:red"></span>
					</div>
					
					 <div class="form-control">
                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="sgender" value="male">
					<label for="male">Male</label>                     
                     <input type="radio" id="female" name="sgender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="sgender" value="other">
                     <label for="other">Other</label><br>
					</fieldset>
					 <span id="sgender" style="color:red"></span>
					</div>
					
					 <div class="form-control">
					  <label>Upload Image:</label>
					   <input type="file" name="uploadfile" value="" id="up"/><br><br>
                 
					  <span id="upl" style="color:red"></span>
					</div>
					
					
					<div class="form-control">
					<fieldset>
                     <legend>Date of Birth:</legend>
                     <input type="date" name="tdob" id="tdo"> <br><br>
                    </fieldset> 
					 <span id="tdob" style="color:red"></span>
					</div>
					 <div class="form-control">
                    <fieldset>
                    <legend>Account Type</legend>
                    <input type="radio" id="student" name="acctype" value="Student">
					<label for="student">Student</label>                     
                     <input type="radio" id="teacher" name="acctype" value="teacher">
                     <label for="teacher">Teacher</label>
                     <input type="radio" id="accountant" name="acctype" value="Accountant">
                     <label for="accountant">Accountant</label><br>
					</fieldset>
					 <span id="acctype" style="color:red"></span>
					</div>
					
                     
                    <button name="tsubmit" type="submit">Register Accountant</button>
					 

						</form> 
						
						
						<?php
						
							if(isset($_POST['tsubmit'])){
								
	$tid = $_POST['tid'];

	$tname = $_POST['tname'];
	
	$tuser = $_POST['tuser'];
	$tpass = $_POST['tpass'];
	$temail = $_POST['temail'];
	$tpos = $_POST['tpos'];
	$tdeg = $_POST['tdeg'];
	$tsa = $_POST['tsa'];
	$sgender = $_POST['sgender'];
	
	$filename =  $_FILES["uploadfile"]["name"];
	$tempname =  $_FILES["uploadfile"]["tmp_name"];
	
	$folder = "../pic/".$filename;
	
	move_uploaded_file($tempname,$folder);
	
	
	$tdob = $_POST['tdob'];
	$acctype = $_POST['acctype'];
	
	
	

	
	
	if($tid !="" && $tname !="" && $tuser !="" && $tpass !="" && $temail !="" && $tpos !="" && $tdeg !="" && $tsa !="" && $sgender !="" && $filename !="" && $tdob !="" && $acctype !="" ){
		$query = "INSERT INTO Accountant VALUES('$tid','$tname','$tuser','$tpass','$temail','$tpos','$tdeg','$tsa','$sgender','$folder','$tdob','$acctype')";
		
		$aquery = "INSERT INTO ACCOUNTLOGIN VALUES('$tid','$tname','$tuser','$tpass','$temail','$tpos','$tdeg','$sgender','$tdob','$folder','$acctype')";
		
		

		$data = mysqli_query($conn,$query);
		
		$adata = mysqli_query($conn,$aquery);
		
		if($data){
			echo "<p style='color:green ; text-align:center'>Accountant Added Successfully</p>";
			
		}
	}else{
		
		echo "<p style='color:red ; text-align:center'>All fields are required</p>";
		
		
	}
								
								
								
							}
						
						
						
						
						
						
						
						?>
                    
					
									
								
								
								</div>
							
							</div>
						
						
						</div>
						
					</div>
				
				
				</div>
	

<?php include 'footer.php'?>