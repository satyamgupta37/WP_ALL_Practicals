<!DOCTYPE html>
<html>
<head>
    <title>php foreach program</title>
</head>
<body>
<?php
    $technologies = array("Artificial Intelligence", "Cloud Computing", "Blockchain", "Cybersecurity");
    echo "<h2>Tech Categories: </h2>";
    foreach($technologies as $technology){
        echo $technology, "<br>";
    }
    echo "<br> Total Categories: ", count($technologies);
?>
</body>
</html>
