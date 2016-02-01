<?php
    $title="This is my CRUD page";
    $title=$_GET["title"];
    if($title=="") {
        $title="My CRUD Cohort Home page";
        
    }
    $header="This is the Header";
    
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
  <h1><?php echo $header; ?></h1>
  <p>
      <?php

    //Connect to the database
    $host = "127.0.0.1";
    $user = "mariasandoval042";                     //Your Cloud 9 username
    $pass = "";                                 //Remember, there is NO password by default!
    $db = "crud";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. It is always 3306

    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());



    //And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM people";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo " ID: " . $row['ID'] . $row["firstname"] . $row["lastname"]. $row["password"]."<br/>";
    }

?>
  </p>
</body>
</html>
