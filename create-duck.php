<?php include('./components/header.php'); ?>
<?php include('./components/nav.php'); ?>

<?php


if (isset($_POST['submit'])) {
    //  create error array
    $errors = array(
        "name" => "",
        "favorite_foods" => "",
        "bio" => "",
        "img_src" => ""
    );


    $name = htmlspecialchars($_POST["name"]);
    $favorite_foods = htmlspecialchars($_POST["favorite_foods"]);
    $bio = htmlspecialchars($_POST["bio"]);
    $img_src = $_FILES['img_src'];

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
    //handle file upload directory
    $target_dir = "./assets/images/";

    //target uploaded image file
    $image_file = $target_dir . basename($_FILES["img_src"]["name"]);
    //get uploaded file extension so we can test to make sure it's an image
    $image_file_type = strtolower(pathinfo($image_file, PATHINFO_EXTENSION));

    //test image errors
    //image exists
    if (empty($img_src)) {
        $errors["img_src"] = "An image is required";
    } else {
        //Check that the image file is an actual image
        $size_check = @getimagesize($_FILES["img_src"]["tmp_name"]);
        $file_size = $_FILES["img_src"]["size"];
        if (!$size_check) {
            $errors["img_src"] = "File is not an image.";
        } else if ($file_size > 500000) {
            $errors["img_src"] = "File size exceeds limit. File cannot be larger than 500kb";
        }
        //file type (if it's an image)

        else if ($image_file_type !=  "jpg" && $image_file_type != "png" && $image_file_type != "jpeg" && $image_file_type != "gif" && $image_file_type != "webp") {
            $errors["img_src"] = "Sorry, only JPG, JPEG, PNG, GIF or WEBP files are allowed.";
            //file size

            //check if file already exists
        }


        if (!array_filter($errors)) {
            //if there are any errors
            require('./config/db.php');

            // build sql query
            $sql = "INSERT INTO ducks(name, favorite_foods, bio, img_src) VALUES ('$name', '$favorite_foods', '$bio', '$image_file')";

            // echo $sql;
            // execute quwry in my sql
            mysqli_query($conn, $sql);
            // load homepage

            if (move_uploaded_file($_FILES["img_src"]["tmp_name"], $image_file)) {
            } else {
                $errors["img_src"] = "Sorry, there was an error uploading your file.";
            } 

            header("Location: ./index.php");
        } else {
            print_r($errors);
        }
    }
}


?>

<body>

    <main>
        <form action="./create-duck.php" method="POST" enctype="multipart/form-data">
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
                                                                    } ?> ">
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
                    <textarea id="bio" name="bio" rows="7"></textarea>
                </div>



                <div class="form_content">
                    <label for="image">
                        <h2>Upload you Duck Picture</h2>
                    </label>
                    <input type="file" id="image" name="img_src">
                </div>





                <button class="submit_button" >
                <input type="submit" value="Submit"  name="submit">
                </button>
            </div>

            </div>
        </form>



    </main>

    <?php include('./components/footer.php'); ?>

    <script src="./assets/js/script.js"></script>

    </html>