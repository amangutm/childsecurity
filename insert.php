<html>
<head>
<title>My Website</title>
</head>
<body>
<form method="POST" align="center" action="http://localhost/sql/process.php">
<h1 align="center" >Sign Up</h1> 
<p>If you are new user<br> please fill up data:</p>
<label ><b>Username</b></label><br>
<input type="text" placeholder="Enter First name" name="user" required></input ><br><br>

<label ><b>Email</b></label><br>
<input type="email" placeholder="Enter email" id="id3" name="email" required></input ><br><br>

<label for "password"><b>Password</b></label><br>
<input type="password" placeholder="Enter Password" id="pass" name="pass" required></input ><br><br>


<button type="submit" name="save">Insert</button>
<input type="reset" value="Cancel" id="btn" ><br><br>
If you have already an account<br> click here- 
<a href="login.php">login</a>
</form>
</body>
</html>
