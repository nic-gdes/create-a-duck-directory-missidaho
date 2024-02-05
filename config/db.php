<?php 

// Create connection to DB with mysqli_connect
// $conn = mysqli_connect ("hostname, useername, password, database name")
$conn = mysqli_connect("db:3306", "root", "root", "db");

//verify connection with mysqli
if(mysqli_connect_errno ()) {
    echo "Database error: ". mysqli_connect_errno ();
    exit();
}

?>