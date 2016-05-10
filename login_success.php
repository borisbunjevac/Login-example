<?php
session_start();
$usr = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="stilpreg.css" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <meta charset="utf-8" />
        <title>Login success</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
        <h1>Login success</h1>
        <p>Wellcome <?php echo $usr;?></p>
                    <p>Querry users:</p>
           <ul class="nav nav-pills nav-stacked">
    <li><a href="form5.html">By Name</a></li>
    <li><a href="form6.html">By Email</a></li>
  </ul>        
       <form action="up202.php" method="post">
Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
<input type="submit">
</form>
                </div>
            </div>
        </div>
    </body>
</html>
