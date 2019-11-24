<!DOCTYPE html>
<html>
<head>
	<title>Login </title>

</head>
<body>
	<div id="login" >
		<form action="process.php" method="POST">
			<p>
				<label>Email</label>
				<input type="text" name="email" required>
			</p>
			<p>
				<label>Password</label>
				<input type="password" name="password" required>
			</p>

			<p>
			
				<input type="submit" id="btn"  value="login">
			</p>
		</form>
		
	</div>
<?php

	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		include 'process.php';
		$str="select * from schema where email='$email' and password ='$password' ";
		$res= msqli_query($sql,$str);

//if(msqli_num_rows($res>0)
	//		echo "<script>alert("Login successful")</script>";
//else
		//	echo"<script>alert("Loginusuccessful")</script>";

	}

?>

</body>
</html>