			<?php include '../header.php';
			error_reporting(0);
			
			?>
		<img src="../about.jfif"/>
		<?php include '../menu.php'?>
		<div class = "home">
	
	<?php
	
include("../model/connection.php");




	

	if($_POST['adsubmit']){
	
	 $adid = $_POST['adid'];

	$adname = $_POST['adname'];
	$adusername = $_POST['adusername'];
	$adpass = $_POST['adpass'];
	$ademail = $_POST['ademail'];
	$adpos = $_POST['adpos'];
	$addeg = $_POST['addeg'];
	$adsalary = $_POST['adsalary'];
	
	$filename =  $_FILES["uploadfile"]["name"];
	$tempname =  $_FILES["uploadfile"]["tmp_name"];
	
	$folder = "pic/".$filename;
	
	move_uploaded_file($tempname,$folder);
	
	$adgender = $_POST['adgender'];
	$addob = $_POST['addob'];
	
	
	

	
	
	if($adid !="" && $adname !="" && $adusername !="" && $adpass !="" && $ademail !="" && $adpos !="" && $addeg !="" && $adsalary !="" && $filename !="" && $adgender !="" && $addob !="" ){
		$query = "INSERT INTO ADMINREG VALUES('$adid','$adname','$adusername','$adpass','$ademail','$adpos','$addeg','$adsalary','$folder','$adgender','$addob')";

		$data = mysqli_query($conn,$query);
		
		
		
		if($data){
			echo "Admin Added Successfully";
			
		}
	}else{
		echo "All fields are required";
	}
	
}

	
?>

		
		</div>
		
		<?php include '../footer.php'; ?>


