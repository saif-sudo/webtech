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
			
			
			
			</div>

<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit4"]))  
 {  
     
      if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }
	   else if(empty($_POST["subject"]))  
      {  
           $error = "<label class='text-danger'>Enter Subject</label>";  
      } else if(empty($_POST["yourmsg"]))  
      {  
           $error = "<label class='text-danger'>Enter Your Message</label>";  
      }
       
      else  
      {  
           if(file_exists('msg.json'))  
           {  
                $current_data = file_get_contents('msg.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                       
                     'e-mail'          =>     $_POST["email"],
					 'subject'               =>     $_POST['subject'],
                     'yourmsg'     =>     $_POST["yourmsg"]
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('msg.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Message Sent Successfully</p>";  
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
				<legend><b>Send Message</b></legend>  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     
                     <label>To</label>
                     <input type="text" name = "email"  /><br /><br />
					 <label>Subject</label>  
                     <input type="text" name="subject"  /><br />  <br />
					 <label>Your Message</label>
					  <input type="text" name="yourmsg"  /><br />  <br />
					
                   
                     
                     <input type="submit" name="submit4" value="Send" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
					</fieldset>
                </form>  
				
				<?php include 'footer.php'?>