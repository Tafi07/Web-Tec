

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  



<h2>Add Products</h2>

<form action="connectiondb.php" method="POST">  
  Name: <br>
  <input type="text" name="name" >
 
  <br><br>
  Buying Price : <br>
  <input type="text" name="buyingprice" >
  
  <br><br>
  Selling Price: <br>
  <input type="text" name="sellingprice" >
 
  <br><br>

  <input type="Checkbox" id="Checkbox1" name="Display" value="Display">
  <label for="Checkbox1"> Display</label><br>
  
  <input type="submit" name="save" value="save">  
</form>



</body>
</html>

