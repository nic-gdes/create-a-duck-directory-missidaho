<?php

include('./config/db.php');

// create sql query
$sql = "SELECT name,favorite_foods, img_src FROM ducks";

//query the db and add the reslut to a php array
$result = mysqli_query($conn, $sql);
$ducks = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory and close SQL connection
mysqli_free_result($result);
mysqli_close($conn);

// print_r($ducks);
// echo count($ducks);
// echo $ducks [0] ["name"];

// foreach($ducks as $duck) {
//     echo $duck['name'];
//     echo $duck['favorite_foods'];
// }

?>
<?php include('./components/header.php'); ?>
<?php include('./components/nav.php'); ?>


<div class="hero">
    <img class="hero_image" src="./assets/images/advertising hero.jpg" alt="banner saying quackfest is coming to CDA">

</div>

<div class="grid_align">
    <div class="grid_wrapper">







        <?php foreach ($ducks as $duck) : ?>
            <div class="grid_card">
                <a class="profile_link" href="./profile.php">
                    <div class="grid_content">
                        <img src="<?php echo $duck["img_src"] ?>" height="75%" alt="red duck rolling its eyes">
                        <h2><?php echo $duck["name"] ?></h2>
                        <h3>Favorite Foods</h3>
                        <?php 
                        $foods_list = explode(",", $duck ["favorite_foods"]);
                        ?>
                        <ul>
                            <?php foreach ($foods_list as $food) : ?>
                                <li><?php echo $food ?></li>
                                <?php endforeach ?>
                   
                        </ul>
                    </div>
                </a>
            </div>
        <?php endforeach ?>


    </div>




</div>

<?php include('./components/footer.php'); ?>

<script src="./assets/js/script.js"></script>

</html>