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
			
			<h1 style="text-align:center">View All Accountant List</h1>
			
			</div>
<?php 

session_start();
   
                          $ar = file_get_contents("ar.json");  

                          $ar = json_decode($ar, true);  


 ?>
	
	<div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr> <th>Accountant ID</th>
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>Position</th>   
                               <th>Degree</th>   
                               <th>Salary</th>   
                               <th>Gender</th>   
                               <th>Date of birth</th>   
                          </tr>  
                          <?php   
                          $ar = file_get_contents("ar.json");  

                          $ar = json_decode($ar, true);  
                
                          foreach($ar as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["sid"].'</td>
                               <td>'.$row["sname"].'</td>
                               <td>'.$row["semail"].'</td>
                               <td>'.$row["sclass"].'</td>
                               <td>'.$row["ssec"].'</td>
                               <td>'.$row["tsa"].'</td>
                               <td>'.$row["sgender"].'</td>
                               <td>'.$row["sdob"].'</td>
                               </tr>';  
                          }  
                          ?>  
                     </table>  
                   </div>
				   </div>


<?php include 'footer.php'?>