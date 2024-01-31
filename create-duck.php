<?php include('./components/header.php'); ?>
<?php include('./components/nav.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    echo $name . " " . $email . "," . $message;
}
?>

<body>

    <main>
        <form action="./contact.php" method="POST">
            <div class="form_wrapper">


                <div class="name_form form_content">
                    <label for="name">
                        <h2>Name</h2>
                    </label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="email_form form_content">
                    <label for="email">
                        <h2>Favorite Foods, (separate multiples with commas.)</h2></label>
                    <input type="text" id="email" name="$email" required>
                </div>
                <div class="message_form form_content">
                    <label for="message">
                        <h2>Message:</h2></label>
                    <textarea id="message" name="message" rows="7" required></textarea>
                </div>





                <button input type="submit" class="submit_buuton"><h2>Submit</h2></button>
            </div>

            </div>
        </form>



    </main>

    <?php include('./components/footer.php'); ?>

<script src="./assets/js/script.js"></script>

</html>