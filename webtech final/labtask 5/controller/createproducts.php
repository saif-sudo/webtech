	<?php
	
include("../model/connection.php");

error_reporting(0);


	

	if($_POST['submit']){
	
	$name = $_POST['name'];
	$buyprice = $_POST['buyprice'];
	$sellprice = $_POST['sellprice'];
	$display = $_POST['display'];
	
	
	if($name !="" && $buyprice !="" && $sellprice !="" ){
		$query = "INSERT INTO PRODUCTS VALUES('id','$name','$buyprice','$sellprice')";

		$data = mysqli_query($conn,$query);
		
		
		if(isset($display) && $data){
			header('location:../display.php');
		}
		else if($data){
			echo "data inserted into database";
			
		}
	}else{
		echo "All fields are required";
	}
}
	

	
?>



