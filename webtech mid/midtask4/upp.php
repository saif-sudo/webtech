
		<?php 
	
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

<form action="upload.php" method="post" enctype="multipart/form-data" style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto ">
<fieldset style="width: 500px; ">
<legend><b>Profile Picture</b></legend>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit3">
  </fieldset>
</form>


 </div>


<?php include 'footer.php'?>