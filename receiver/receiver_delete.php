<?php 
include_once '../config.php';

    $sql = "DELETE FROM receiver WHERE receiverid='" . $_GET["receiverid"] . "'";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Profile Successfully Deleted, Please Sign In or Register Again');</script>";
        echo "<script type='text/javascript'> document.location ='receiver_signin.php'; </script>";
    } else {
        echo "Error Deleting Profile: " . mysqli_error($con);
    }
    mysqli_close($con);
?>