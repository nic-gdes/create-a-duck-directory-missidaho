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

    $name = htmlspecialchars($_POST ["name"]);
    $favorite_foods = htmlspecialchars($_POST ["favorite_foods"]);
    $bio = htmlspecialchars($_POST ["bio"]);

    if(preg_match('/^[a-z\s]+$/', $name)) {
        // echo "there is a name";
    } else {
  $errors["name"] = "illegal characters";
    }
    
echo $name;
print_r($errors);
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
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="email_form form_content">
                    <label for="email">
                        <h2>Favorite Foods, (separate multiples with commas.)</h2>
                    </label>
                    <input type="text" id="email" name="favorite_foods" required>
                </div>
                <div class="message_form form_content">
                    <label for="message">
                        <h2>Biography:</h2>
                    </label>
                    <textarea id="message" name="bio" rows="7" required></textarea>
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