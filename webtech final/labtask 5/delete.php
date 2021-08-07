<?php
include("model/connection.php");

error_reporting(0);
$idp = $_GET['idp'];
$_GET['sn'];
 $_GET['bp'];
 $_GET['sp'];

?>
<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>


                <form action="controller/deleteproducts.php" method="post" style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto ">  
				
				<fieldset style="width: 500px; ">
				<legend><b>DELETE PRODUCT</b></legend>  
                   
                     <br />  
					 <input type="hidden" name="id" value="<?php echo $_GET['idp'] ?>">
                     <label>Name: </label>  <?php echo $_GET['sn']?><br />  <br />
                     
					   <label>Buying Price</label> : <?php echo $_GET['bp']?><br />  <br />
                     
					   <label>Selling Price</label> : <?php echo $_GET['sp']?><br />  <br />
					   
					   <label>Displayable: YES </label><br />  <br />
                     
                   
				  
					
					<hr/><br />  <br />
                     
                    <input type="submit" name = "submit" value = "Delete"/>            
                    
					</fieldset>
                </form>  
			
</body>
</html>