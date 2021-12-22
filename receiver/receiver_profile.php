<?php
$identifier = 0;
include("../php/page_header.php");
include("../config.php");

error_reporting(0);
?>

        <section class="s6">
            <div class="main-container">
                <div class="hero-centertitle">
                    <br><h1>Receiver Profile</h1>
                </div>

                <div class="hero-subtitle">

                    <?php 
                         $result1 = mysqli_query($con, "select * from receiver where Email = '$account' ");
                         $num1 = mysqli_num_rows($result1);
                        
                         if ($num1 == 1) {
                            while($account1 = mysqli_fetch_array($result1)){
                            ?>
                    

                    <h5>Receiver Information:</h5>
                    <br>

                    <p>Name : <?php echo $account1['Name']; ?> </p>
                    <p>Phone Number : <?php echo $account1['PhoneNum']; ?> </p>
                    <p>Email : <?php echo $account1['Email']; ?> </p>
                    <?php 
                        }
                    }
                    ?>
                    <br>
                    <br>
                    <a class="btn btn-info" href="receiver_edit_profile.php">Edit Profile</a>
                    <a class="btn btn-danger">Delete Profile</a>           
        </section>
        <?php include("../php/page_footer.php"); ?>           