		<?php include 'header.php';
		error_reporting(0);
		
		?>
		<img src="about.jfif"/>
		<?php include 'menu.php'?>
		<div class = "home">
		
			<h1>Admin Registration</h1>
			
                <form action="controller/addadmin.php" method="post" style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto " enctype="multipart/form-data">  
				
				<fieldset style="width: 500px; ">
				<legend><b>Admin Registration</b></legend>  
                    
                     <br />  
					 <label>Admin ID:</label>  
                     <input type="text" name="adid"  /><br />  <br />
                     <label>Admin Name:</label>  
                     <input type="text" name="adname"  /><br />  <br />
					 <label>Admin Username:</label>  
                     <input type="text" name="adusername"  /><br />  <br />
					 <label>Admin Password:</label>  
                     <input type="password" name="adpass"  /><br />  <br />
                     <label>Admin E-mail:</label>
                     <input type="text" name = "ademail"  /><br /><br />
                     <label>Admin Position:</label>
                     <input type="text" name = "adpos"  /><br /><br />
					 <label>Admin Degree:</label>
                     <input type="text" name = "addeg"  /><br /><br />
					 <label>Admin Salary:</label>
                     <input type="text" name = "adsalary"  /><br /><br />
					  <label>Upload Image:</label>
					 <input type="file" name="uploadfile" value="" /><br><br>
					
                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="adgender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="adgender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="adgender" value="other">
                     <label for="other">Other</label><br>
					</fieldset>
					<fieldset>
                     <legend>Date of Birth:</legend>
                     <input type="date" name="addob"> <br><br>
                    </fieldset> <br /> 
                     
                     <input type="submit" name="adsubmit" value="Add Admin" /><br />                      
                    
					</fieldset>
                </form>  
			
		</div>
		
		<?php include 'footer.php'; ?>
		
		
				
		
		
		
		
		
		
	