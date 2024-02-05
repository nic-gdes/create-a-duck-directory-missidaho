<?php 

include('./config/db.php');

// create sql query
$sql = "SELECT name,favorite_foods,img_src FROM ducks";

//query the db and add the reslut to a php array
$result = mysqli_query($conn, $sql);
$ducks = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory and close SQL connection
mysqli_free_result($result);
mysqli_close($conn);

// print_r($ducks);
// echo count($ducks);
// echo $ducks [0] ["name"];

foreach($ducks as $duck) {

}

?>
<?php include('./components/header.php'); ?>
<?php include('./components/nav.php'); ?>


<div class="hero">
    <img class="hero_image" src="./assets/images/advertising hero.jpg" alt="banner saying quackfest is coming to CDA">

</div>

<div class="grid_align">
    <div class="grid_wrapper">
        <a class="profile_link" href="./profile.php">
            <div>
                <div class="grid_card">
                    <div class="grid_content">
                        <img src="./assets/images/2BirdRed.png.webp" alt="red duck rolling its eyes">
                        <h2>Rosie Red</h2>
                        <h3>Favorite Foods</h3>
                        <ul>
                            <li>Strawberries</li>
                            <li>Pepperoni</li>
                            <li>Ketchup</li>
                        </ul>
                    </div>

                </div>
            </div>
        </a>



        <div>
            <div class="grid_card">
                <div class="grid_content">
                    <img src="./assets/images/tzb1ugmtuuuvnngt03tw.jpg.webp" alt="cool lookin rubber duck">
                    <h2>Duckie Cool</h2>
                    <h3>Favorite Foods</h3>
                    <ul>
                        <li>Hot Dog</li>
                        <li>Hot Dog</li>
                        <li>Hot Dog</li>
                    </ul>
                </div>

            </div>
        </div>
        <div>
            <div class="grid_card">
                <div class="grid_content">
                    <img src="./assets/images/tzb1ugmtuuuvnngt03tw.jpg.webp" alt="cool lookin rubber duck">
                    <h2>Duckie Cool</h2>
                    <h3>Favorite Foods</h3>
                    <ul>
                        <li>Hot Dog</li>
                        <li>Hot Dog</li>
                        <li>Hot Dog</li>
                    </ul>
                </div>

            </div>
        </div>
        <div>
            <div class="grid_card">
                <div class="grid_content">
                    <img src="./assets/images/tzb1ugmtuuuvnngt03tw.jpg.webp" alt="cool lookin rubber duck">
                    <h2>Duckie Cool</h2>
                    <h3>Favorite Foods</h3>
                    <ul>
                        <li>Hot Dog</li>
                        <li>Hot Dog</li>
                        <li>Hot Dog</li>
                    </ul>
                </div>

            </div>
        </div>
        <div>
            <div class="grid_card">
                <div class="grid_content">
                    <img src="./assets/images/tzb1ugmtuuuvnngt03tw.jpg.webp" alt="cool lookin rubber duck">
                    <h2>Duckie Cool</h2>
                    <h3>Favorite Foods</h3>
                    <ul>
                        <li>Hot Dog</li>
                        <li>Hot Dog</li>
                        <li>Hot Dog</li>
                    </ul>
                </div>

            </div>
        </div>
        <div>
            <div class="grid_card">
                <div class="grid_content">
                    <img src="./assets/images/tzb1ugmtuuuvnngt03tw.jpg.webp" alt="cool lookin rubber duck">
                    <h2>Duckie Cool</h2>
                    <h3>Favorite Foods</h3>
                    <ul>
                        <li>Hot Dog</li>
                        <li>Hot Dog</li>
                        <li>Hot Dog</li>
                    </ul>
                </div>

            </div>
        </div>

        <div>
            <div class="grid_card">
                <div class="grid_content">
                    <img src="./assets/images/199060_600_600.jpg" alt="park range rubber duck">
                    <h2>Sarge</h2>
                    <h3>Favorite Foods</h3>
                    <ul>
                        <li>Steak</li>
                        <li>Potatoes</li>
                        <li>Wiskey </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('./components/footer.php'); ?>

<script src="./assets/js/script.js"></script>

</html>