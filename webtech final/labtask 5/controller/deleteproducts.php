<?php
include("../model/connection.php");

if($_POST['submit']){
$idp = $_POST['id'];
$query = "DELETE FROM PRODUCTS WHERE ID ='$idp' ";


$data = mysqli_query($conn,$query);
	
	if($data){
		echo "<script>alert('Record Deleted')</script>"; 
		
		?>
		<META HTTP-EQUIV="Refresh" Content="0; URL=http://localhost/webtech/webtech%20final/labtask%205/display.php" >
		<?php
	}else{
		echo "<font color = 'red'>Sorry Record not deleted";
	}
	
}
?>