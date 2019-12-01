<?php 
	session_start(); //Starting Sessionj
	$error="";//stores error messages
	
		

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// echo "post";

		//gets values passed from the form in login.php
		$email = $_POST['email'];
		$password = $_POST['password'];

		//Connection to server and databse

		$link =mysqli_connect("localhost", "root","");
		mysqli_select_db($link ,"bugme");


		//this prevents sql injection

		$email = stripcslashes($email);
		$password = stripcslashes($password);

		$email = mysqli_real_escape_string($link,$_POST["email"]);
		$password = md5(mysqli_real_escape_string($link,$_POST["password"]));

		echo $password;
		//Query the database for user
		
		$result = mysqli_query($link,"select * from users where email='$email' AND password = '$password' " )
					 or die("Failed to query database".mysqli_error($link));
		
		$row = mysqli_fetch_array($result);
		// echo "<pre>";
		// var_dump($row);
		// echo "</pre>";
		
		if ($row['email'] == $email){
			$_SESSION['login_user']=$email; //initializing the session
			header("Location: newUser.html"); //Redirect to to new user page
		}else{
			$error= "Login Failed";
		}

		if(isset($_POST['submit'])){
			if(empty($_POST['email'])|| empty($_POST['password'])){
					$error="Username or Password incorrect";
			}
			
		}
		echo $error;
		mysqli_close($link);//Closing connection
}
 ?>