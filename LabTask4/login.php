
<?php 

	session_start();

	$username = "admin";
	$password = "admin";

	if (isset($_POST['uname'])) {
		if ($_POST['uname']==$username && $_POST['pass']==$password) {
			$_SESSION['uname'] = $username;
			header("location:dashboard.php");
		}
		else{
			$msg = "username or password invalid";
		}
	}
 ?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	<span><?php
		if (isset($msg)) {
			echo $msg;
		}

	 ?>
	 	 	
	 </span>
	 <br>
	Username:
	<input type="text" name="uname" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>">
	<br>
	Password:
	<input type="password" name="pass" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>">
	<br>
	<br>
    <input id="remember" type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])) {echo "checked";} ?>> <label for="remember">Remember Me</label><br>

	<input type="submit" name="login" value="Login" > 
    <a href =forgetpassword.php> Forgot Password</a>



</form>


<?php include 'footer.php';?>