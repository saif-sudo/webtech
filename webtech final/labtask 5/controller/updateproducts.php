	<?php
	error_reporting(0);
include("../model/connection.php");




	

	if($_POST['submit']){
	 $idp = $_POST['id'];
	 
	$name = $_POST['name'];
	$buyprice = $_POST['buyprice'];
	$sellprice = $_POST['sellprice'];
	$display = $_POST['display'];
	$query = "UPDATE PRODUCTS SET NAME='$name' , BUYPRICE ='$buyprice' , SELLPRICE ='$sellprice' WHERE ID ='$idp'";
	$data = mysqli_query($conn,$query);
		
		
		if(isset($display) && $data){
			header('location:../display.php');
		}
		else if($data){
			echo "data Updated";
			
		}
	}else{
		echo "Not Updated";
	}
	
	

	
?>



