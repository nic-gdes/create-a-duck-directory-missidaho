<?php include('./components/header.php'); ?>
<?php include('./components/nav.php'); ?>
<?php

$duck_is_live = false;

if (isset($_POST['submit'])) {
    $id_to_delete = (int)$_POST[$id_to_delete];
    $sql_delete = "DELETE FROM example WHERE id=$id_to_delete";

    mysqli_query($conn, $sql);
    header("./index.php");
}


if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);

    require('./config/db.php');

    $sql = "SELECT id, name, favorite_foods, bio, img_src FROM ducks WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $duck = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    // print_r($duck);
    // duck has a valid id
    if (isset($duck["id"])) {
        $duck_is_live = true;
    }
}



?>

<?php if ($duck_is_live) : ?>


    <div class="profile_card">
        <div class="profile_image_placeholder">
            <!-- <img class="profile_image" src="./assets/images/2BirdRed.png.webp"> -->
            <img class="profile_image" src="<?php echo $duck['img_src']; ?>">
        </div>
        <div class="flex_column">
            <h2>
                <?php echo $duck['name']; ?>
            </h2>
            <h3>
                Favorite Foods:
                <?php echo $duck['favorite_foods'] ?>
            </h3>
            <p>
                <?php echo $duck['bio'] ?>
            </p>

        </div>
    </div>

    <form action="./profile.php" method="POST">
        <input type="hidden" name="id_to_delete" placeholder="ID to delete" required value="<?php echo $id; ?>" />
        <input type="submit" value="Delete" name="submit" />
    </form>
<?php else : ?>
    <section class="non-duck">
        <h1>Sorry, this duck does not exist!</h1>
    </section>
<?php endif ?>



<?php include('./components/footer.php'); ?>

<script src="./assets/js/script.js"></script>






</html>