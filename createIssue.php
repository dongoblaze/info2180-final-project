<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>INFO2180-Final-Project</title>
    <link rel="stylesheet" href="createUssue.css" />
    <script src="app.js"></script>
</head>

<body>
    <div id="banner">
        <div>
            <img src="photo/debug.png" alt="header debug icon" id="main-icon">
        </div>
        <div id="title">BugMe Issue Tracker</div>
    </div>

    <div class="page">


        <div class="sidebar">
                <ul>
                    <a href="issuesAll.html">
                        <li>
                            <img src="photo/home.png" alt="" class="side-icon">
                            Home
                        </li>
                    </a>
    
                    <a href="newUser.html">
                        <li>
                            <img src="photo/add-user.png" alt="" class="side-icon">
                            Add User
                        </li>
                    </a>
                    <a href="createIssue.html">
                        <li>
                            <img src="photo/newIssue.png" alt="" class="side-icon">
                            New Issue
                        </li>
                    </a>
    
                    <a href="">
                        <li>
                            <a href="loginScreen.php">
                            <img src="photo/logout.png" alt="" class="side-icon">
                            Logout
                        </li>
                    </a>
    
                </ul>
            </div>

        <div class="main-area">
            <div>
                <h1>Create Issue</h1>
            </div>
                <form>
                    <br>
                    <br>
                    Title<br>
                    <input type="text" name="firstname" required >
                    <br><br>
                    Description<br>
                    <textarea name="des" cols="53" rows="5" placeholder="Enter description here" required></textarea>
                    <br><br>
                    Assigned To<br>
                    <select  class = "select" required> 

                        
                    </select>
                    <br><br>
                    Type <br>
                    <select  name = "type" required>
                    <option value="bug">Bug</option>    
                    <option value="pro">Proposal</option>
                    </select>
                    <br><br>
                    Priority 
                    <br>
                    <select  class = "select" required>
                     <option value="maj">Major</option>
                     <option value="min">Minor</option>    
                    <option value="crit">Critical</option>   
                    </select>
                    <br><br>
                    <button class="submit" type="submit">Submit</button>
                </form> 
            </div>       

    </div>


</body>

</html>