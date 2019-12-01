<?php include("prac.php");
?>

<!DOCTYPE html>

<html>
<head>
	<title>Login Form </title>
    <link rel="stylesheet" href="loginCss.css" type="text/css">
</head>
<body>
    <div id="header">
        <img src="photo/debug.png" alt="header debug icon" id="bug" >
            <div id ="headerName">BugMe Issue Tracker</div>
        </div>
    <div class="page-body">
            <div class="sideBar">
            </div>
	<div class="main-area" >
		<h1>User Login form</h1>
		<form action="" method="POST">
            <br><br>
                Email:<br>
				<input type="text" name="email" required>
                <br><br>
                Password:<br>
				<input type="password" name="password" required>
                <br><br>
				<button class="submit" type="submit">Submit</button>
		
		</form>
		
    </div>
    </div>


</body>
</html>