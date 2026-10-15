<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TechnologyPortal";
// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check Connection
if (!$conn)
{
 die("Connection Failed: " . mysqli_connect_error());
}
// Get Form Data
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$technologyName = $_POST['technologyName'];
$category = $_POST['category'];
$type = $_POST['type'];
$yearIntroduced = $_POST['yearIntroduced'];
$description = $_POST['description'];
// SQL Query
$sql = "INSERT INTO Technology
(Name, Email, Contact, TechnologyName, Category, Type, YearIntroduced, Description)
VALUES
('$name', '$email', '$contact', '$technologyName', '$category', '$type', '$yearIntroduced', '$description')";
// Execute Query
if(mysqli_query($conn, $sql))
{
 echo "<h2>Record Inserted Successfully!</h2>";
}
else
{
 echo "Error: " . mysqli_error($conn);
}
// Close Connection
mysqli_close($conn);
?>
