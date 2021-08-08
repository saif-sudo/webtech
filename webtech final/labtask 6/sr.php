		<?php 
	
		include 'header.php'?>
		
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
			
			<h1 style="text-align:center">Student Registration</h1>
			
			</div>
<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit4"]))  
 {  
      if(empty($_POST["sid"]))  
      {  
           $error = "<label class='text-danger'>Enter Student ID</label>";  
      }
	  else if(empty($_POST["sname"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["semail"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["sclass"]))  
      {  
           $error = "<label class='text-danger'>Enter a Class</label>";  
      }  
      else if(empty($_POST["ssec"]))  
      {  
           $error = "<label class='text-danger'>Enter a Section</label>";  
      }
      else if(empty($_POST["sgender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
	   else if(empty($_POST["sdob"]))  
      {  
           $error = "<label class='text-danger'>Date of Birth cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('sr.json'))  
           {  
                $current_data = file_get_contents('sr.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'sid'               =>     $_POST['sid'],  
                     'sname'          =>     $_POST["sname"],  
                     'semail'     =>     $_POST["semail"],
					'sclass'  => $_POST["sclass"],
                     'ssec'     =>     $_POST["ssec"],  
                     'sgender'     =>     $_POST["sgender"],
                     'sdob'     =>     $_POST["sdob"],
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('sr.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  


              
                <form method="post" style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto ">  
				
				<fieldset style="width: 500px; ">
				<legend><b>Student Registration</b></legend>  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
					 <label>Student ID</label>  
                     <input type="text" name="sid"  /><br />  <br />
                     <label>Student Name</label>  
                     <input type="text" name="sname"  /><br />  <br />
                     <label>Student E-mail</label>
                     <input type="text" name = "semail"  /><br /><br />
                     <label>Student Class</label>
                     <input type="text" name = "sclass"  /><br /><br />
					 <label>Student Section</label>
                     <input type="text" name = "ssec"  /><br /><br />
                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="sgender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="sgender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="sgender" value="other">
                     <label for="other">Other</label><br>
					</fieldset>
					<fieldset>
                     <legend>Date of Birth:</legend>
                     <input type="date" name="sdob"> <br><br>
                    </fieldset> 
                     
                     <input type="submit" name="submit4" value="Append" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
					</fieldset>
                </form>  
				
				<?php include 'footer.php'?>