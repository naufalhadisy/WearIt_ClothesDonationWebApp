<?php
$identifier = 1;
session_start();
error_reporting(0);
include("../php/page_header.php");
include("../config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM donation where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
//Databse Connection file
?>


<div class="main-container">
    <section class="s4">
        <div class="kain-container">
            <h1>Donation</h1><br><br>
        </div>
        <div class="container">
            <h4><?php echo $row['donation']; ?></h1><br>
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-5">
                                    <label for="picture">Picture:</label>
                                    <div class="form-group">
                                        <img class="card-img-top" src="../img/<?php echo $row['picture']; ?>" style="width: 450px; heigh:auto;">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <label for="donation">Donor Name:</label>
                                    <input type="text" name="name" value="<?php echo $row['name']; ?>" readonly><br>
                                    <label for="donation">Donor Email:</label>
                                    <input type="text" name="email" value="<?php echo $row['email']; ?>" readonly><br>
                                    <label for="donation">Donor Phone Number:</label>
                                    <input type="text" name="phonenum" value="<?php echo $row['PhoneNum']; ?>" readonly><br>
                                    <label for="donation">Description:</label>
                                    <textarea id="w3review" rows="4" cols="50" name="description" readonly><?php echo $row['description']; ?> </textarea><br>
                                    <p class="row justify-content-left"><i> &emsp;*Please contact the donor through email or phone number</i></p><br><br><br><br>
                                    
                                    <div class="hero-centertitle">
                                        <h6>Got clothes from this donation post?</h6>
                                        <h6>Please give the Donor your kind feedback.</h6>
                                        <a class="btn btn-info" href="../php/feedback_select.php?id=<?php echo $row['id']?>">Give Feedback</a>
                                    </div>

                                </section>
                                </div>   
                            </div>
                    </div>
                    
                </div>
        </div>
        </form>
    </section>
</div>

</div>




<?php include("../php/page_footer.php"); ?>