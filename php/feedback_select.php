<?php 
$identifier = 3;
error_reporting(0);
session_start();
include("../php/page_header.php"); 
include("../config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM donation where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

</div>
        <section class="s5">
            <div class="main-container">
                <div class="content-wrapper-contact">
                    <div class="hero-title-contact">
                        <div class="hero-v2">
                            <h1>Give Your</h1>
                            <h1 style="font-size: 50px">Awesome Gratitude !</h1>
                        </div>
                    </div>
                    
                    <div class="hero-form">
                        <form method="post" id="messageform">
                            <label for="email">To</label>
                            <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>">

                            <label for="email">From</label>
                            <input type="text" id="email" name="email" placeholder="example@mail.com">
                                    
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="fullname" placeholder="Put Your Name Here">
                                    
                            <label for="message">Feedback Message</label>
                            <textarea id="message" name="message" placeholder="Leave message here" style="height:100px"></textarea>

                            <button name="submit" type="submit" id="btnsubmit" class="btn bg-violet text-light">Submit</button>
                        </form>

                        <br>
                    </div>
                </div>
            </div>
        </section>




<?php include("page_footer.php"); ?>  