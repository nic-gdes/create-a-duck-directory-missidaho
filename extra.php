<!-- Data Server Practice -->

<!-- <?php
/******** CONNECT TO A DATABASE *********/

$conn = mysqli_connect("db:3306", "db", "db", "db");
// use mysqli_connect to connect to database. There are four arguments: host, username, password, and database name, in that order.
// check if there's no connection and give an error if so
if (mysqli_connect_error()) {
    echo "Connection error: " . mysqli_connect_error();
    exit();
}

/******** EXECUTE QUERIES ON THE DATABASE TO RETRIEVE DATA *********/
// write query for all ducks ( SELECT name, favorite_foods, imgsrc FROM ducks )
$sql = "SELECT * FROM Example";

// make query and get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
/******** WRAP UP DATABASE CONNECTION *********/

// free the result from memory
mysqli_free_result($result);
// close the connection to the database
mysqli_close($conn);

print_r($data);
?>
<h1>Hello World</h1>
<ul>
    <?php foreach ($data as $name) : ?>
        <li><?php echo $name['first_name']; ?></li>
        <?php endforeach; ?>
</ul> -->