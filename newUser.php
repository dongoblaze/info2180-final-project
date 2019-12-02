<?php include("create.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Info2180-Final-Project</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script src="validation.js"></script>
</head>

<body>
    <div id="header">
            <img src="photo/debug.png" alt="header debug icon" id="bug" >
            <div id ="headerName">BugMe Issue Tracker</div>
        </div>
        


    <div class="page-body">

        <div class="sideBar">
            <ul>
                    <li>
                        <a href="issuesAll.html">
                        <img src="photo/home.png" alt="home icon" class="sideBar-icon">
                        Home
                    </li>
                    </a>
                    <li>
                        <a href="newUser.html">
                        <img src="photo/add-user.png" alt="add user icon" class="sideBar-icon">
                        Add User
                    </li>
                        </a>
                    <li>
                        <a href="createIssue.html">
                        <img src="photo/newIssue.png" alt="New issue icon" class="sideBar-icon">
                        New Issue
                    </li>
                </a>
                    <li>
                        <a href="logout.php">
                        <img src="photo/logout.png" alt="Logout icon" class="sideBar-icon">
                        Logout
                    </li>
                    </a>
            </ul>
        </div>

        <div class="main-area">
                <h1>New User </h1>
                <form id="Newuser" name="Newuser" action=" " onsubmit="return validation();" method="POST" >
                   <br>    
                    First name:<br>
                    <input type="text" name="firstname" required>
                    <br><br>
                    Last name:<br>
                    <input type="text" name="lastname" required>
                    <br><br>
                    Email:<br>
                    <input type="email" name="email" required>
                    <br><br>
                    Password:<br>
                    <input type="password" name="password" required >
                    <br><br>
                    <button class="submit" type="submit">Submit</button>
                </form>
            
        </div>

    </div>




</body>
</html>