		<?php include 'header.php'
		
		
		?>
		<img src="headerimage.jpg">
		<?php include 'nav.php'?>
		<?php include 'menu.php';
		include("../model/connection.php");
		$query = "SELECT * FROM NOTICE";
	
	$data = mysqli_query($conn, $query);
	
		
		
		
		?>
		<div class = "home">
			<h1>All Notice</h1>
			<div class="container">
						<div class="col-md-9 mt-1" style="background-color: #AAD6C1;">
							<div class="card mb-3 content ">
								<h1 class="m-3 pt-3 userhome">Notice</h1>
								<div class="card-body">

							<?php		{
	
	?>
		<div class="table-responsive">
		<table class="table table-striped" >
			<tr>
				<th>Title</th>
				<th>Full Notice</th>
				
				
			
			</tr>
	
	
	<?php
	while($result = mysqli_fetch_assoc($data)){
		echo "<tr>
				<td>".$result['title']."</td>
				
				<td>".$result['fullnotice']."</td>
				
				
				
			
			</tr>";
	}
}

?>

	</table>
                  
					
									
								
								</div>
								</div>
							
							</div>
						
						
						</div>
						</div>
			
		</div>
		
		<?php include 'footer.php'; ?>
		
		
		