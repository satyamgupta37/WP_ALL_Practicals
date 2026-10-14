#suggest.html
<!DOCTYPE html>
<html>
<head>
    <title>Technology Suggestion Form</title>

    <script>
        function validateForm() {
            let name = document.getElementById("name").value;
            let technology = document.getElementById("technology").value;
            let reason = document.getElementById("reason").value;

            if (name == "" || technology == "" || reason == "") {
                alert("Please fill in all the fields.");
                return false;
            }

            alert("Form submitted successfully!");
            return true;
        }
    </script>
</head>

<body>
    <h2>Technology Suggestion Form</h2>

    <form action="save.php" method="post"
          onsubmit="return validateForm()">

        Name:
        <input type="text" id="name" name="name">
        <br><br>

        Technology Name:
        <input type="text" id="technology" name="technology">
        <br><br>

        Reason for Suggestion:
        <textarea id="reason" name="reason"></textarea>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <br>
    <a href="read.php">View Saved Suggestions</a>
</body>
</html>

#save.php
<?php
$name = $_POST['name'];
$technology = $_POST['technology'];
$reason = $_POST['reason'];

$data = "Name: " . $name . "\n";
$data .= "Technology: " . $technology . "\n";
$data .= "Reason: " . $reason . "\n";
$data .= "--------------------\n";

$file = fopen("technology.txt", "a");

fwrite($file, $data);

fclose($file);

echo "Technology Suggestion Saved Successfully!";
echo "<br><br>";
echo "<a href='suggest.html'>Back to Form</a>";
echo "<br>";
echo "<a href='read.php'>View Saved Suggestions</a>";
?>

#read.php
<?php
if (file_exists("technology.txt")) {

    $data = file_get_contents("technology.txt");

    echo "<h2>Technology Suggestions</h2>";

    echo nl2br(htmlspecialchars($data));

} else {

    echo "Technology.txt File Not Found.";

}

echo "<br><br>";
echo "<a href='suggest.html'>Back to Form</a>";
?>

#note:All files in the same folder