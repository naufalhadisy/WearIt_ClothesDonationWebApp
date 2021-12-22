<?php
$identifier = 1;
include("page_header.php");

//Databse Connection file
include('dbconnection.php');
if (isset($_POST['upload'])) {
    //getting the post values
    $picture = $_FILES['picture']['name'];
    $donation = $_POST['donation'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    // get the image extension
    $extension = substr($picture, strlen($picture) - 4, strlen($picture));
    // allowed extensions
    $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if (!in_array($extension, $allowed_extensions)) {
        echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    } else {
        //rename the image file
        $imgnewfile = md5($imgfile) . time() . $extension;
        // Code for move image into directory
        move_uploaded_file($_FILES["picture"]["tmp_name"], "img/" . $imgnewfile);
        // Query for data insertion
        $query = mysqli_query($con, "insert into donation(picture, donation, description, name, email) value('$imgnewfile','$donation','$description','$name', '$email')");
        if ($query) {
            echo "<script>alert('You have successfully post the donation');</script>";
            echo "<script type='text/javascript'> document.location ='upload.php'; </script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
</head>

<body>
    <section class="s2">
        <div class="kain-container">
            <span class="">

                <a href="upload.php" class="btn btn-info btn-block btn-sm col-sm-2 float-right"> <span>Donation Post</span></a>

            </span>
            <h1>Donation</h1>
        </div>

        <form method="post" enctype="multipart/form-data">

            <label for="picture">Picture:</label>
            <div class="form-group">
                <input type="file" class="form-control" name="picture" required="true">
            </div>

            <label for="donation">Donation:</label>
            <input type="text" name="donation" required><br>

            <label for="description">Description:</label>
            <input type="text" name="description" required><br>

            <label for="name">Name:</label>
            <input type="text" name="name" required><br>

            <label for="email">Email:</label>
            <input type="text" name="email" required><br>

            <input type="submit" name="upload" value="Submit" /><br>

        </form>
    </section>



</body>

</html>
<?php include("page_footer.php"); ?>  
