<?php
$identifier = 0;
include("../php/page_header.php");
include("../config.php");
error_reporting(0);
$account = $_SESSION["receiver_email"];
?>

<section class="s6">
            <div class="main-container">
                <div class="hero-centertitle">
                    <h1 style="color: #5B828E">Delete Profile</h1><br>
                </div>
                <?php 
                         $result1 = mysqli_query($con, "select * from receiver where Email = '$account' ");
                         $num1 = mysqli_num_rows($result1);
                        
                         if ($num1 == 1) {
                            while($d = mysqli_fetch_array($result1)){
                            ?>
                
                <h3 style="text-align: center">Are you sure you want to delete your profile ?</h3>
                <h5 style="text-align: center">With the user email of: <?php echo $d['Email']; ?> </h5><br>
              
            </div>
            
            <div style="text-align: center">
            <a class="btn btn-info" href="receiver_profile.php">Cancel</a>
            <a class="btn btn-danger" type="delete" name="delete" href="receiver_delete.php?receiverid=<?php echo $d["ReceiverID"];?>">Delete</a>
            </div>
            <?php 
             }}?>
</section>

<?php include("../php/page_footer.php"); ?>   