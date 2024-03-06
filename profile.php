<?php include('./components/header.php'); ?>
<?php include('./components/nav.php'); ?>
<?php

if(isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    require ('./config/db.php');

    $sql = "SELECT id, name, favorite_foods, bio, img_src FROM ducks WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $duck = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}


?>

<div class="profile_card">
    <div class="profile_image_placeholder">
        <!-- <img class="profile_image" src="./assets/images/2BirdRed.png.webp"> -->
        <img class="profile_image" src="<?php echo $duck ['img_src'];  ?> alt=duck.">
    </div>
    <div class="flex_column">
        <h2>
            <?php echo $duck['name']?>
        </h2>
        <h3>
        <?php echo $duck['favorite_foods']?>
        </h3>
        <?php $food_list = explode(",",)?>
        <ul>
            <li>Strawberries</li>
            <li>Pepperoni</li>
            <li>Ketchup</li>
        </ul>
        <p>
        <?php echo $duck['bio']?>
        </p>
    </div>
</div>


<?php include('./components/footer.php'); ?>

<script src="./assets/js/script.js"></script>

</html>