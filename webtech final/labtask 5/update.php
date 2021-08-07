<?php
include("model/connection.php");

error_reporting(0);
	$idp = $_GET['idp'];
	$idp;
	$_GET['sn'];
	$_GET['bp'];
	$_GET['sp'];

?>
<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>


                <form action="controller/updateproducts.php" method="post" style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto ">  
				
				<fieldset style="width: 500px; ">
				<legend><b>UPDATE PRODUCT</b></legend>  
                   
                     <br />  
					 <input type="hidden" name="id" value="<?php echo $_GET['idp'] ?>">
                     <label>Name</label>  
                     <input type="text" name="name" value="<?php echo $_GET['sn']?>" /><br />  <br />
					   <label>Buying Price</label>  
                     <input type="number_format" name="buyprice" value="<?php echo $_GET['bp']?>" /><br />  <br />
					   <label>Selling Price</label>  
                     <input type="number_format" name="sellprice"  value="<?php echo $_GET['sp']?>" /><br />  <br />
                   <hr/>
				   <input type="checkbox" id="display" name="display" value="Display">
					<label for="display">Display</label><br>
					<hr/>
                     
                    <input type="submit" name = "submit" value = "Update"/>            
                    
					</fieldset>
                </form>  
			
</body>
</html>