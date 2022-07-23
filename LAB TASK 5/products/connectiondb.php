<?php
	$name = $_POST['name'];
	$buyingprice = $_POST['buyingprice'];
	$sellingprice = $_POST['sellingprice'];
	

// Database connection
	$conn = new mysqli('localhost','root','','product_db');

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into products(name,buyingprice,sellingprice) values(?, ?, ?)");
		$stmt->bind_param("sii", $name,$buyingprice,$sellingprice);
		$execval = $stmt->execute();
		echo $execval;
		echo "Product Added successfully...";

		$stmt->close();
		$conn->close();
	}
?>

 <br><a href="display.php">Show Products</a>