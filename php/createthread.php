<?php
$identifier = 2;
include("page_header.php");
include('dbconnection.php'); 
if (isset($_POST['submit'])) {
    //getting the post values
    $contentFile = $_FILES['contentFile']['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    // get the image extension
    $extension = substr($contentFile, strlen($contentFile) - 4, strlen($contentFile));
    // allowed extensions
    $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif",".PNG");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if (!in_array($extension, $allowed_extensions)) {
        echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    } else {
        //rename the image file
        $imgnewfile = md5($imgfile) . time() . $extension;
        // Code for move image into directory
        move_uploaded_file($_FILES["contentFile"]["tmp_name"], "img/" . $imgnewfile);
        // Query for data insertion
        $query = mysqli_query($con, "insert into topics(contentFile, postedby, category, title, content) value('$imgnewfile','$name','$category','$title', '$content')");
        if ($query) {
            echo "<script>alert('Forum Posted');</script>";
            echo "<script type='text/javascript'> document.location ='forum.php'; </script>";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    }
}
?>

<section class="s2">
    <div class="main-container">
            <h1>New Thread</h1>

            <form method="post" enctype="multipart/form-data">
                <label for="donation">Name:</label>
                <input type="text" name="name" required><br>

                <label for="donation">Tittle:</label>
                <input type="text" name="title" required><br>

                <label for="description">Add Tags:</label>
                <input type="text" name="category" required><br>

                <label for="description">Content:</label>
                <textarea id="w3review" name="content" rows="4" cols="50"> </textarea>

                <label for="picture">Picture:</label>
                <input type="file" name="contentFile" required><br>
            <br>
                <input type="submit" name="submit" value="Submit" />
            </form>
  
    </div>
</section>
<?php include("page_footer.php"); ?>  
