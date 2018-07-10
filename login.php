<html>
<head>
<title>My Website</title>
<link rel="stylesheet" type="text/css" href=".css">
</head>
<body>
<form method="POST" name="f" align="center" action="http://localhost/sql/validation.php">
<h1 text-color="light red" padding="12px">Login Page</h1> 
<p>Please login:</p>
<label ><b>Username</b></label><br>
<input type="text" placeholder="Enter Username" id="user" name="user" required></input ><br><br>

<label for "password"><b>Password</b></label><br>
<input type="password" placeholder="Enter Password" id="pass" name="pass" required></input ><br><br>

<button type="submit" >Login</button>
<input type="reset" value="Cancel" id="btn" >
</form>