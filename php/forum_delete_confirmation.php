<?php 
include_once '../config.php';

    $sql = "DELETE FROM topics WHERE id='" . $_GET["id"] . "'";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Post Deleted. Back to Forum Menu');</script>";
        echo "<script type='text/javascript'> document.location ='forum.php'; </script>";
    } else {
        echo "Error Deleting Profile: " . mysqli_error($con);
    }
    mysqli_close($con);
?>
