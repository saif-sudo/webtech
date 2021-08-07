<?php
include("model/connection.php");

error_reporting(0);

?>
<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>


                <form action="controller/createproducts.php" method="post" style="padding-top: 10px ; text-align: center ; max-width:600px; margin : 0 auto ">  
				
				<fieldset style="width: 500px; ">
				<legend><b>ADD PRODUCT</b></legend>  
                   
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name"  /><br />  <br />
					   <label>Buying Price</label>  
                     <input type="number_format" name="buyprice"  /><br />  <br />
					   <label>Selling Price</label>  
                     <input type="number_format" name="sellprice"  /><br />  <br />
                   <hr/>
				   <input type="checkbox" id="display" name="display" value="Display">
					<label for="display">Display</label><br>
					<hr/>
                     
                    <input type="submit" name = "submit" value = "Save"/>            
                    
					</fieldset>
                </form>  
			
</body>
</html>