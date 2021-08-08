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
			
			<h1 style="text-align:center">Notice</h1>
			
			</div>

<?php 

session_start();
   
                          $notice = file_get_contents("notice.json");  

                          $notice = json_decode($notice, true);  


 ?>
	
	<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Notice</th> 
                               <th>DESCRIPTION</th>  
                               
                               
                          </tr>  
                          <?php   
                          $notice = file_get_contents("notice.json");  

                          $notice = json_decode($notice, true);  
                
                          foreach($notice as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["notice"].'</td>
                               <td>'.$row["des"].'</td>
                               
                              
                               </tr>';  
                          }  
                          ?>  
                     </table>  
                   </div>
				   </div>


<?php include 'footer.php'?>