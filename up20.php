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
$email = $_POST["email"];
$name = $_POST["name"];
$pwd = $_POST["pwd"];
$repwd = $_POST["repwd"];

if(empty($name) || empty($email) || empty($pwd) || empty($repwd))
{
    echo "You did not fill out the required fields.";
    die();
}
else {

$sql = "SELECT userid, email, username, password, repassword FROM Users WHERE username = '$name'";
$result = $conn->query($sql);
    $count=mysqli_num_rows($result);
   $row=mysqli_fetch_array($result);

    if ($count>=1)
   {
         echo "Username already exists.";
       }
   else
   {
        
        

$sql = "INSERT INTO Users (email, username, password, repassword)
VALUES ('$email', '$name', '$pwd', '$repwd')";

if ($conn->query($sql) === TRUE) {
     session_start();       
     $_SESSION['name'] = $name;
     header("location: signedup.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
   }
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
