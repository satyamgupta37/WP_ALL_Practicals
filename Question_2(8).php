#category.html
<!DOCTYPE html>
<html>
<head>   
    <title>Select Technology Category</title>
</head>
<body> 
<h2>Select Your Preferred Technology Category</h2>
<form action="setcookie.php" method="post">
Preferred Technology:
<select name="category">
<option>Artificial Intelligence</option>
<option>Cloud Computing</option>
<option>Cyber Security</option>
<option>Blockchain</option>
<option>Internet of Things</option>
</select>
<br><br>
<input type="submit" value="Save Preference">
</form>
</body>
</html>

#setcookie.php
<?php
$category = $_POST['category'];
// Create Cookie (Valid for 1 day)
setcookie("technology", $category, time() + 86400); 
echo "<h2>Your Preference has been Saved Successfully!</h2>";
echo "<a href='welcome.php'>Visit Portal</a>";
?>

#welcome.php
<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Emerging Technologies Information Portal</title>
</head>
<body>
<h2>Welcome to Emerging Technologies Information Portal</h2>
<?php
if(isset($_COOKIE['technology']))
{
 echo "<h3>Your Preferred Technology Category is: "
 . $_COOKIE['technology'] . "</h3>";
}
else
{
 echo "<h3>No Preference Found.</h3>";
} 
?>
</body>
</html>

note:All files in the same folder