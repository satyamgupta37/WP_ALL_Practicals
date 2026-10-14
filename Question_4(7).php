
#suggest.html
<!DOCTYPE html>
<html>
<head>
    <title>Technology Suggestion</title>

    <script>
        function validateForm() {
            let name = document.getElementById("name").value;
            let technology = document.getElementById("technology").value;

            if (name == "" || technology == "") {
                alert("Please fill all fields");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>

    <h2>Technology Suggestion Form</h2>

    <form action="save.php" method="post"
          onsubmit="return validateForm()">

        <label>Enter Name:</label>
        <input type="text" id="name" name="name">
        <br><br>

        <label>Suggest Technology:</label>
        <input type="text" id="technology" name="technology">
        <br><br>

        <input type="submit" value="Submit">

    </form>

    <br>
    <a href="read.php">View Saved Data</a>

</body>
</html>

#save.php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $technology = trim($_POST["technology"]);

    if ($name != "" && $technology != "") {

        $data = "Name: " . $name .
                " | Technology: " . $technology . PHP_EOL;

        file_put_contents("technology.txt", $data, FILE_APPEND);

        echo "<h2>Data Saved Successfully!</h2>";
        echo '<a href="suggest.html">Go Back</a><br><br>';
        echo '<a href="read.php">View Saved Data</a>';

    } else {
        echo "Please fill all fields.";
    }
}
?>

#read.php
<?php
$file = "technology.txt";

echo "<h2>Saved Technology Suggestions</h2>";

if (file_exists($file)) {

    $data = file_get_contents($file);

    echo "<pre>";
    echo htmlspecialchars($data);
    echo "</pre>";

} else {
    echo "No data found.";
}

echo '<br><a href="suggest.html">Back to Form</a>';
?>

#note:Both files in the same folder


