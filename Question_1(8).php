#login.html
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
<h2>Emerging Technologies Information Portal</h2>
<form action="login.php" method="post">
Username:
<input type="text" name="username" required><br><br>
Password:
<input type="password" name="password" required><br><br>
<input type="submit" value="Login">
</form>
</body>
</html>

#login.php
<?php
session_start(); 
$username = $_POST['username'];
$password = $_POST['password'];
// Valid Username and Password
if ($username == "admin" && $password == "12345")
{
 $_SESSION['username'] = $username;
 header("Location: suggest.php");
}
else
{
 echo "<h2>Invalid Username or Password!</h2>";
 echo "<a href='login.html'>Try Again</a>";
}
?>

#suggest.php
<?php
session_start();
// Check Session
if (!isset($_SESSION['username']))
{
 header("Location: login.html");
 exit();
}
?>
<!DOCTYPE html> 
<html>
<head>
    <title>Technology Suggestion Form</title>
</head>
<body>
<h2>Welcome,
<?php
echo $_SESSION['username'];
?>
</h2>
<h3>Technology Suggestion Form</h3>
<form>
Name:
<input type="text"><br><br>
Email:
<input type="email"><br><br>
Technology:
<input type="text"><br><br>
Suggestion:
<textarea rows="5" cols="30"></textarea><br><br>
<input type="submit" value="Submit"> </form>
<br>
<a href="logout.php">Logout</a>
</body>
</html>

#logout.php
<?php
session_start();
// Destroy Session
session_destroy();
// Redirect to Login Page
header("Location: login.html");
exit();
?>

note:All files in the same folder
