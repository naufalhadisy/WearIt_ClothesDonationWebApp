<?php
$identifier = 2;
include("page_header.php");
include('dbconnection.php');
if (isset($_POST['submit'])) {
    //getting the post values
    $ID = $_GET['id'];
    $contentFile = $_FILES['contentFile']['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    // get the image extension
    $extension = substr($contentFile, strlen($contentFile) - 4, strlen($contentFile));
    // allowed extensions
    $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if (!in_array($extension, $allowed_extensions)) {
        echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    } else {
        //rename the image file
        $imgnewfile = md5($imgfile) . time() . $extension;
        // Code for move image into directory
        move_uploaded_file($_FILES["contentFile"]["tmp_name"], "img/" . $imgnewfile);
        // Query for data insertion
        $query = mysqli_query($con, "update topics SET contentFile = '$imgnewfile', title = '$title', content = '$content', postedby = '$name', category = '$category' where id = '$ID'");
        if ($query) {
            echo "<script>alert('Post Edited');</script>";
            echo "<script type='text/javascript'> document.location ='forum.php'; </script>";
        } else {
            echo "Error creating table: " . mysqli_error($con);
        }
    }
}
                $ID = $_GET['id'];
                $ret = mysqli_query($con, "select * from topics where id = '$ID'");
                $cnt = 1;
                $row = mysqli_num_rows($ret);
                if ($row > 0) {
                    while ($row = mysqli_fetch_array($ret)) {
?>
<section class="s2">
    <div class="main-container">
            <h1>Edit Thread</h1>

            <form method="post" enctype="multipart/form-data">
                <label for="donation">Name:</label>
                <input type="text" name="name" value="<?php echo $row['postedby']; ?>" required><br>

                <label for="donation">Tittle:</label>
                <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>

                <label for="description">Add Tags:</label>
                <input type="text" name="category"value="<?php echo $row['category']; ?>" required><br>

                <label for="description">Content:</label>
                <textarea id="w3review" name="content" value="<?php echo $row['title']; ?>" rows="4" cols="50"> </textarea>

                <label for="picture">Picture:</label>
                <input type="file" name="contentFile" required><br>
            <br>
                <input type="submit" name="submit" value="Submit" />
            </form>
    </div>
    
</section>
<?php
                        $cnt = $cnt + 1;
                    }
                 } else { ?>
                        <tr>
                            <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
                        </tr>
                    <?php } ?>

<?php include("page_footer.php"); ?>  
