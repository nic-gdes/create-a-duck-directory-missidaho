<?php include('./components/header.php'); ?>
<?php include('./components/nav.php'); ?>

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = htmlspecialchars($_POST['name']);
//     $email = htmlspecialchars($_POST['email']);
//     $message = htmlspecialchars($_POST['message']);
//     echo $name . " " . $email . "," . $message;
// }

if (isset($_POST['submit'])) {
    //  create error array
    $errors = array(
        "name" => "",
        "favorite_foods" => "",
        "bio" => ""
    );

    $name = htmlspecialchars($_POST["name"]);
    $favorite_foods = htmlspecialchars($_POST["favorite_foods"]);
    $bio = htmlspecialchars($_POST["bio"]);

    if (empty($name)) {
        //if the name is empty
        $errors['name'] = "A name is required.";
    } else {
        if (!preg_match('/^[a-z\s]+$/i', $name)) {
            // echo "there is a name";
            $errors["name"] = "illegal characters";
        }
    }

    if (empty($favorite_foods)) {
        //if the name is empty
        $errors['favorite_foods'] = "A food item is required.";
    } else {
        if (!preg_match('/^[a-z\s]+$/i', $name)) {
            // echo "there is a name";
            $errors["favorite_foods"] = "illegal characters";
        }
    }

    if (empty($bio)) {
        //if the name is empty
        $errors['bio'] = "A bio is required.";
    }
    if (!array_filter($errors)) {
        //if there are any errors
        header("Location: ./index.php");
    } else {
    }


    // if (preg_match('/^[a-z\s]+$/', $name)) {
    //     // echo "there is a name";
    // } else {
    //     $errors["name"] = "illegal characters";
    // }

    // if (preg_match('/^[a-z,\s]+$/', $favorite_foods)) {
    //     // echo "there is a name";
    // } else {
    //     $errors["name"] = "Must be separated by commas";
    // }


}



?>

<body>

    <main>
        <form action="./create-duck.php" method="POST">
            <div class="form_wrapper">


                <div class="name_form form_content">
                    <label for="name">
                        <h2>Name</h2>
                    </label>
                    <?php
                    if (isset($errors['name'])) {

                        echo "<div class = 'error'>" . $errors["name"] . "</div>";
                    }


                    ?>
                    <input type="text" id="name" name="name" value="<?php if (isset($name)) {
                                                                        echo $name;
                                                                    } ?> >
                </div>
                <div class="email_form form_content">
                    <label for="email">
                        <h2>Favorite Foods, (separate multiples with commas.)</h2>
                    </label>
                    <?php
                    if (isset($errors['favorite_foods'])) {

                        echo "<div class='error'>" . $errors["favorite_foods"] . "</div>";
                    }


                    ?>
                    <input type="text" id="email" name="favorite_foods">
                </div>
                <div class="message_form form_content">
                    <label for="message">
                        <h2>Biography:</h2>
                    </label>
                    <?php
                    if (isset($errors['bio'])) {

                        echo "<div class='error'>" . $errors["bio"] . "</div>";
                    }


                    ?>
                    <textarea id="message" name="bio" rows="7"></textarea>
                </div>
                
                
                
                <div class="form_content">
                    <label for="image">
                        <h2>Upload you Duck Picture</h2>
                    </label>
                    <input type="file" id="image" name="$email">
                </div>





                <button input type="submit" value="Submit" class="submit_button" name="submit">

                </button>
            </div>

            </div>
        </form>



    </main>

    <?php include('./components/footer.php'); ?>

    <script src="./assets/js/script.js"></script>

    </html>