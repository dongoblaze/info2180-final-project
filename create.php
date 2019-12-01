<?php 
session_start(); //Starting Sessionj
//stores error messages

$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$mail = $_POST['email'];
$pwd = $_POST['password'];

$conn = new mysqli('localhost', 'root' ,'', 'bugme',);
$sql = 'SELECT * FROM users';
$result = mysqli_query($conn,$sql);

$rep = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql ="INSERT INTO users (firstname,lastname,email,password) VALUES ('$fn','$ln','$mail','$pwd')";

if($conn -> query($sql)== TRUE){
	echo "New record added";
} else{
	echo "Record wasnt added";
}

if(isset($_POST['submit'])){
	if(empty($_POST['email'])|| empty($_POST['fn']) || empty($_POST['pwd']) || empty($_POST['ln']) || empty($_POST['mail'])){
		$error="FIELDS ARE EMPTY";
}
}
?>
