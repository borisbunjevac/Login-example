<?php
$servername = "localhost";
$username = "bbUyvus";
$password = "$%mrcfc0M.:.";
$dbname = "bb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$comment = $_POST["comment"];
$date = date("Y-m-d");
$sql = "INSERT INTO Comments (comment, email, date)
VALUES ('$comment','{$_SESSION['email']}', '$date')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header("location: logout.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
