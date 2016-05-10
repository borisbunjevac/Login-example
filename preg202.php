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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="stilpreg.css" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <meta charset="utf-8" />
        <title>Comments</title>
    </head>
    <body>
        <div class="container">
        <h1>Comments</h1>
            
     <table class="table table-striped table-bordered">
     <tr>     
     <th>id</th>
     <th>Comment</th>
     <th>Email</th>
     <th>Date</th>
     </tr>
         <?php
   $sql = "SELECT commentid, comment, email, date  
   FROM Comments
   WHERE email='{$_SESSION['email']}'
   ORDER BY date
   ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["commentid"]. "</td><td>" . $row["comment"]. "</td><td>" . $row["email"] . "</td><td>" . $row["date"] . "</td></tr>";
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
