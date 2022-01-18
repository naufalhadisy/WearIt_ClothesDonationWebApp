<?php
$identifier = 2;
session_start();
error_reporting(0);
include("../php/page_header.php");
include("../config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM topics where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
//Databse Connection file
?>

<section class="s6">
            <div class="main-container">
                <div class="hero-centertitle">
                    <h1 style="color: #5B828E">Delete Post</h1> 
                </div>
                <h3 style="text-align: center">Are you sure you want to delete your post?</h3>
                <h5 >Post Title: <?php echo $row['title']; ?></h5>
                <h3 >Content : </h3>
                <h5 ><?php echo $row['content']; ?></h5>
                <h5>Content Image: <img src="../img/<?php echo $row['contentfile']; ?>" style="width:20%"></h5>
                
                <div style="text-align: center">
            <a class="btn btn-info" href="forum.php">Cancel</a>
            <a class="btn btn-danger" type="delete" name="delete" href="forum_delete_confirmation.php?id=<?php echo $row["id"];?>">Delete</a>
            </div>
</section>

<?php include("../php/page_footer.php"); ?>     
