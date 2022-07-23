<html>
	<head>
	<title> Products </title>
	
	
	</head>
<body>

	<table border='2' width=100% >
	<tr>
	
	<th style='text-align:center;'>Name</th>

	<th style='text-align:center;'>Buying Price</th>
	<th style='text-align:center;'>Selling Price</th>
	
	<th colspan="2" align= "center">Operations</th>
</tr>

				



<?php
	//$conn = new mysqli('localhost','root','','products_db');
	  include ("connection.php") ;
	error_reporting(0);
	$query = "select * from products ";

	$data = mysqli_query ($conn, $query) ;
	$total = mysqli_num_rows($data) ;


	if ($total!=0)
	{
		
		while($result=mysqli_fetch_assoc($data))
		{
			echo "
			<tr >
			
			<td style='text-align:center;'>".$result['name']."</td>
			<td style='text-align:center;'>".$result['buyingprice']."</td>
			<td style='text-align:center;' >".$result['sellingprice']."</td>
			
			
			<td  style='text-align:center;'><a href='../Controller/updateuser.php?
			id=$result[id]&name=$result[name]&email=$result[email]&gender=$result[gender]&user=$result[user]'>
			<input style='background:green ;font-size: 19px;'type='submit' value='Edit/Update' id='editbtn'></td>
			

			<td  style='text-align:center;'><a href='deleteproduct.php?id=$result[id]' onclick='return checkdelete()'>
			<input style='background:red ;font-size: 19px;'type='submit' value='Delete' id='deleteBtn'></td>
			
			</tr>
			";
		}
	}
	else
	{
		echo "No records found";
	}

	?>
	</table>
	<script>
		function checkdelete()
		{
			return Confirm('Are You Sure You Wanna Delete?');
		}
</script>

</body>
</html>
<a href="addproducts.php">
				<input class="back-btn" type="submit" value="Back" name="btnClick">
				</a>