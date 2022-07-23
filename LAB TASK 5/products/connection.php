<?php

$servername="localhost";
$username="root";
$password="";
$dbname="product_db";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo"Conncetion Ok";
}
else 
{
	echo"Connection Failed!! ".mysqli_connect_error();
}


?>