<?php 

// Create connection to DB with mysqli_connect
// $conn = mysqli_connect ("hostname, useername, password, database name")
$conn = mysqli_connect("127.0.0.1:3308", "2024mleahy", "mleahy300","welearnd_gdes261_2024_mleahy");

//verify connection with mysqli
if(mysqli_connect_errno ()) {
    echo "Database error: ". mysqli_connect_errno ();
    exit();
}

?>