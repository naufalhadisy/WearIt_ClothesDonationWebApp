<?php
$identifier = 1;
include("page_header.php");

//Databse Connection file
include('dbconnection.php');
if (isset($_POST['upload'])) {
    //getting the post values
    $ID = $_GET['id'];
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
        $query = mysqli_query($con, "update donation SET picture = '$imgnewfile', donation = '$donation', description = '$description', name = '$name', email = '$email' where id = '$ID'");
        if ($query) {
            echo "<script>alert('You have successfully post the donation');</script>";
            echo "<script type='text/javascript'> document.location ='upload.php'; </script>";
        } else {
            echo "Error creating table: " . mysqli_error($con);
        }
    }
}

                $ID = $_GET['id'];
                $ret = mysqli_query($con, "select * from donation where id = '$ID'");
                $cnt = 1;
                $row = mysqli_num_rows($ret);
                if ($row > 0) {
                    while ($row = mysqli_fetch_array($ret)) {
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
            <h1>Edit Post</h1>
        </div>

        <form method="POST" enctype="multipart/form-data">


            

            <label for="picture">Picture: <br> <img src="img/<?php echo $row['picture']; ?>" style="width:100%"></label>
            <div class="form-group">
                <input type="file" class="form-control" name="picture" required="true">
            </div>

            <label for="donation">Donation:</label>
            <input type="text" name="donation" value="<?php echo $row['donation']; ?>" required><br>

            <label for="description">Description:</label>
            <input type="text" name="description" value="<?php echo $row['description']; ?>" required><br>

            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>

            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo $row['email']; ?>" required><br>

            <input type="submit" name="upload" value="Submit" /><br>

        </form>
    </section>
    <?php
                        $cnt = $cnt + 1;
                    }
                 } else { ?>
                        <tr>
                            <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
                        </tr>
                    <?php } ?>


</body>

</html>
<?php include("page_footer.php"); ?>  
