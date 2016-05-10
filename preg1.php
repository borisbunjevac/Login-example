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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="stilpreg.css" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <title>Users</title>
    </head>
    <body>
        <div class="container">
        <h1>Users</h1>
            
     <table class="table table-striped table-bordered">
     <tr>     
     <th>id</th>
     <th>Email</th>
     <th>Username</th>     
     </tr>
         <?php
   $name = $_POST["name"];
   $sql = "SELECT userid, email, username  
   FROM Users
   WHERE username ='$name'
   ORDER BY userid
   ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["userid"]. "</td><td>" . $row["email"]. "</td><td>" . $row["username"] . "</td></tr>";
  }
} else {
    echo "0 results";
}

$conn->close();
   ?>
     </table> 
     </div> 
    </body>
</html>
