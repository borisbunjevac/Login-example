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

echo "Connected successfully";

// sql to create table
$sql = "CREATE TABLE Comments (
commentid int AUTO_INCREMENT PRIMARY KEY,
comment  VARCHAR(200) NOT NULL,
email VARCHAR(50) NOT NULL,
date DATE
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
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
