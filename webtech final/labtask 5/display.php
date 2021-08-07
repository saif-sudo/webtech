<style>

td{
	padding:10px;
}

</style>

<?php
include("model/connection.php");
error_reporting(0);
$query = "SELECT * FROM PRODUCTS";

$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);




if($total != 0){
	
	?>
	<fieldset style="width: 500px; padding-top:10px ; text-align : center ; max-width:600px; margin : 0 auto">
				<legend><b>DISPLAY PRODUCT</b></legend>  
                   
                     <br />  
		<table border="5"  ">
			<tr>
				<th>Name</th>
				<th>Profit</th>
				<th colspan = "2">Operations</th>
			
			</tr>
	
	
	<?php
	while($result = mysqli_fetch_assoc($data)){
		$profit = $result['sellprice']-$result['buyprice'];
		
		echo "<tr>
				<td>".$result['name']."</td>
				<td>".$profit."</td>
				<td><a href='update.php?idp=$result[id]&sn=$result[name]&bp=$result[buyprice]&sp=$result[sellprice]'>Edit</a></td>
				<td><a href='delete.php?idp=$result[id]&sn=$result[name]&bp=$result[buyprice]&sp=$result[sellprice]'>Delete</a></td>
				
			
			</tr>";
	}
}else{
	echo "No Records";
}

?>

	</table>
	
	</fieldset>
	
	<script>
	function checkdelete(){
		return confirm("Are You Sure you want to delete this data?");
	}
	</script>