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

// Define $username and $password 
$email=$_POST['email']; 
$password=$_POST['pwd'];

$sql = "SELECT userid, email, username, password, repassword FROM Users WHERE email = '$email' && repassword = '$password'";
$result = $conn->query($sql);
    $count=mysqli_num_rows($result);
   $row=mysqli_fetch_array($result);

    if ($count==1)
   {
        session_start();       
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("location: login_success.php");
       }
   else
   {
        header("location: form203.html");
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
