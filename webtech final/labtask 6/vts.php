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
					<li><a href="sp.php">Student Payment</a></li>
					<li><a href="vsp.php">View All Student Payment Details</a></li>
					<li><a href="ts.php">Teacher Salary</a></li>
					<li><a href="vts.php">View All Teachers Salary Details</a></li>
					<li><a href="notice.php">Notice</a></li>
					<li><a href="msg.php">Message</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div class = "userhome">
			
			<h1 style="text-align:center">View All Teacher Salary Details</h1>
			
			</div>

<?php 

session_start();
   
                          $ts = file_get_contents("ts.json");  

                          $ts = json_decode($ts, true);  


 ?>
	
	<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Teacher ID</th> 
                               <th>Student Name</th>  
                               <th>Teacher Salary</th>   
                               <th>Teahcer Post</th>    
                          </tr>  
                          <?php   
                          $ts = file_get_contents("ts.json");  

                          $ts = json_decode($ts, true);  
                
                          foreach($ts as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["ti"].'</td>
                               <td>'.$row["tn"].'</td>
                               <td>'.$row["ts"].'</td>
                               <td>'.$row["tp"].'</td>
                               
                               </tr>';  
                          }  
                          ?>  
                     </table>  
                   </div>
				   </div>


<?php include 'footer.php'?>